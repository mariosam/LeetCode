# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule ApplyOperationsOnArrayToMaximizeSumOfSquares do
  @spec max_sum(nums :: [integer], k :: integer) :: integer
  def max_sum(nums, k) do
    dict = List.duplicate(0, 32)
    modulo = 1_000_000_007

    dict =
        Enum.reduce(nums, dict, fn num, acc ->
        count_bits(num, 0, acc)
        end)

    {ret, _dict} =
        Enum.reduce(1..k//1, {0, dict}, fn _, {ret, dict} ->
        {num, dict} = build_num(31, dict, 0)
        {rem(ret + num * num, modulo), dict}
        end)
    ret
    end

    defp count_bits(0, _j, dict), do: dict
    defp count_bits(_num, 32, dict), do: dict

    defp count_bits(num, j, dict) do
    bit = Bitwise.band(num, 1)
    dict = List.update_at(dict, j, &(&1 + bit))
    count_bits(Bitwise.bsr(num, 1), j + 1, dict)
    end

    defp build_num(-1, dict, num), do: {num, dict}
    defp build_num(j, dict, num) do
    if Enum.at(dict, j) > 0 do
        dict = List.update_at(dict, j, &(&1 - 1))
        build_num(j - 1, dict, num + Bitwise.bsl(1, j))
    else
        build_num(j - 1, dict, num)
    end
  end
end
