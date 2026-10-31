# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule CountDaysSpentTogether do
  @spec count_days_together(arrive_alice :: String.t, leave_alice :: String.t, arrive_bob :: String.t, leave_bob :: String.t) :: integer
  def count_days_together(arrive_alice, leave_alice, arrive_bob, leave_bob) do
    days = {31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31}

    cond do
        arrive_alice > leave_bob or arrive_bob > leave_alice ->
        0
        arrive_alice == leave_bob or arrive_bob == leave_alice ->
        1

        true ->
        max_arrive = max(arrive_alice, arrive_bob)
        min_leave = min(leave_alice, leave_bob)
        {m1, d1} = parse_date(max_arrive)
        {m2, d2} = parse_date(min_leave)

        if m1 == m2 do
            d2 - d1 + 1
        else
            res = elem(days, m1 - 1) - d1 + 1

            res =
            Enum.reduce((m1 + 1)..(m2 - 1)//1, res, fn i, acc ->
                acc + elem(days, i - 1)
            end)
            res + d2
        end
    end
    end

    defp parse_date(date) do
    [month, day] =
        date
        |> String.split("-")
        |> Enum.map(&String.to_integer/1)
    {month, day}
  end
end
