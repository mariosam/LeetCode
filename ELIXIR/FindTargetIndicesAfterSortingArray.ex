# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule FindTargetIndicesAfterSortingArray do
  @spec target_indices(nums :: [integer], target :: integer) :: [integer]
  def target_indices(nums, target) do
    nums
    |> Enum.sort()
    |> Enum.with_index()
    |> Enum.reduce([], fn {num, i}, acc ->
        if num == target do
        [i | acc]
        else
        acc
        end
    end)
    |> Enum.reverse()
  end
end
