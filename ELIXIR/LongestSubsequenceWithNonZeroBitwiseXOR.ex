# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule LongestSubsequenceWithNonZeroBitwiseXOR do
  @spec longest_subsequence(nums :: [integer]) :: integer
  def longest_subsequence(nums) do
    xor = Enum.reduce(nums, 0, &Bitwise.bxor/2)
    cnt0 = Enum.count(nums, &(&1 == 0))
    n = length(nums)

    cond do
        xor != 0 -> n
        cnt0 == n -> 0
        true -> n - 1
    end
  end
end
