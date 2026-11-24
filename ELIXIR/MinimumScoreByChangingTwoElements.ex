# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule MinimumScoreByChangingTwoElements do
  @spec minimize_sum(nums :: [integer]) :: integer
  def minimize_sum(nums) do
    nums = Enum.sort(nums)
    n = length(nums)

    high_of_changing_two_mins = Enum.at(nums, n - 1) - Enum.at(nums, 2)
    high_of_changing_two_maxs = Enum.at(nums, n - 3) - Enum.at(nums, 0)
    high_of_changing_min_and_max = Enum.at(nums, n - 2) - Enum.at(nums, 1)

    min(
        high_of_changing_two_mins,
        min(
        high_of_changing_two_maxs,
        high_of_changing_min_and_max
        )
    )
  end
end
