# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule MinimumMovesToEqualArrayElements do
  @spec min_moves(nums :: [integer]) :: integer
  def min_moves(nums) do
    case nums do
        [] ->
        0
        _ ->
        min_num = Enum.min(nums)

        Enum.reduce(nums, 0, fn num, acc ->
            acc + num - min_num
        end)
    end
  end
end
