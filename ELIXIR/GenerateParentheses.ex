# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule GenerateParentheses do
  @spec generate_parenthesis(n :: integer) :: [String.t]
  def generate_parenthesis(n) do
      dfs(n, n, [], [])
      |> Enum.reverse()
    end
    defp dfs(0, 0, cur, ans) do
      [cur |> Enum.reverse() |> to_string() | ans]
    end
    defp dfs(left, right, _cur, ans) when left > right do
      ans
    end
    defp dfs(left, right, cur, ans) do
      ans =
        if left > 0 do
          dfs(left - 1, right, [?( | cur], ans)
        else
          ans
        end
      if right > 0 do
        dfs(left, right - 1, [?) | cur], ans)
      else
        ans
      end
  end
end
