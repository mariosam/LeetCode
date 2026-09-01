# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule SumGame do
  @spec sum_game(num :: String.t) :: boolean
  def sum_game(num) do
    chars = String.to_charlist(num)
    n = length(chars)
    half = div(n, 2)
    {left, right} = Enum.split(chars, half)

    {cnt1, sum1} =
        Enum.reduce(left, {0, 0}, fn char, {cnt, sum} ->
        if char == ?? do
            {cnt + 1, sum}
        else
            {cnt, sum + char - ?0}
        end
        end)

    {cnt2, sum2} =
        Enum.reduce(right, {0, 0}, fn char, {cnt, sum} ->
        if char == ?? do
            {cnt + 1, sum}
        else
            {cnt, sum + char - ?0}
        end
        end)

    if rem(cnt1 + cnt2, 2) != 0 do
        true
    else
        sub = div(9 * (cnt1 - cnt2), 2) + (sum1 - sum2)
        sub != 0
    end
  end
end
