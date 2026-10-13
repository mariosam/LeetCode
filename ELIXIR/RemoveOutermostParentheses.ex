# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule RemoveOutermostParentheses do
  @spec remove_outer_parentheses(s :: String.t) :: String.t
  def remove_outer_parentheses(s) do
    s
    |> String.graphemes()
    |> Enum.reduce({[], 0}, fn ch, {result, depth} ->
        if ch == "(" do
            if depth > 0 do
                {[ch | result], depth + 1}
            else
                {result, 1}
            end
        else
            if depth > 1 do
                {[ch | result], depth - 1}
            else
                {result, 0}
            end
        end
    end)
    |> elem(0)
    |> Enum.reverse()
    |> Enum.join()
    end
end
