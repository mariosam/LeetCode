# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule EvaluateTheBracketPairsOfString do
  @spec evaluate(s :: String.t, knowledge :: [[String.t]]) :: String.t
  def evaluate(s, knowledge) do
    map =
        Enum.into(knowledge, %{}, fn [key, value] ->
        {key, value}
        end)

    s
    |> String.to_charlist()
    |> evaluate_chars(map, [])
    |> Enum.reverse()
    |> to_string()
    end

    defp evaluate_chars([], _map, acc) do
    acc
    end

    defp evaluate_chars([?( | rest], map, acc) do
    {key, rest} = read_key(rest, [])

    value = Map.get(map, key, "?")

    evaluate_chars(rest, map, [value | acc])
    end

    defp evaluate_chars([?) | rest], map, acc) do
    evaluate_chars(rest, map, acc)
    end

    defp evaluate_chars([char | rest], map, acc) do
    evaluate_chars(rest, map, [<<char>> | acc])
    end

    defp read_key([?) | rest], acc) do
    {acc |> Enum.reverse() |> to_string(), rest}
    end

    defp read_key([char | rest], acc) do
    read_key(rest, [char | acc])
  end
end
