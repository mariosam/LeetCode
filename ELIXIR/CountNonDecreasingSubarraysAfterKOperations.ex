# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule CountNonDecreasingSubarraysAfterKOperations do
  @spec count_non_decreasing_subarrays(nums :: [integer], k :: integer) :: integer
  def count_non_decreasing_subarrays(nums, k) do

    nums = List.to_tuple(nums)
    n = tuple_size(nums)

    {ans, _cost, _dq, _j} =
        Enum.reduce((n - 1)..0//-1, {0, 0, :queue.new(), n - 1}, fn i, {ans, cost, dq, j} ->
        num = elem(nums, i)
        {count, cost, dq} = merge_from_back(dq, num, 1, cost)
        dq = :queue.in({num, count}, dq)
        {cost, dq, j} = shrink_from_front(dq, nums, j, cost, k)
        {ans + j - i + 1, cost, dq, j}
        end)
    ans
    end
    defp merge_from_back(dq, num, count, cost) do

    case :queue.out_r(dq) do
        {{:value, {next_num, next_count}}, rest} when next_num < num ->

        merge_from_back(
            rest,
            num,
            count + next_count,
            cost + (num - next_num) * next_count
        )
        _ ->
        {count, cost, dq}
    end
    end

    defp shrink_from_front(dq, nums, j, cost, k) when cost > k do
    {{:value, {rightmost_num, rightmost_count}}, rest} = :queue.out(dq)
    cost = cost - (rightmost_num - elem(nums, j))

    dq =
        if rightmost_count > 1 do
        :queue.in_r({rightmost_num, rightmost_count - 1}, rest)
        else
        rest
        end
    shrink_from_front(dq, nums, j - 1, cost, k)
    end

    defp shrink_from_front(dq, _nums, j, cost, _k), do: {cost, dq, j}
end
