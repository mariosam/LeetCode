# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule CountCommasInRangeII do
  @spec count_commas(n :: integer) :: integer
  def count_commas(n) do
    count_commas(n, 1000, 0)
  end

  defp count_commas(n, x, ans) when x <= n do
    count_commas(n, x * 1000, ans + n - x + 1)
  end

  defp count_commas(_n, _x, ans), do: ans
end
