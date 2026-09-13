# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule CountCommasInRange do
  @spec count_commas(n :: integer) :: integer
  def count_commas(n) do
    if n >= 1000 do

        n - 999

    else

        0

    end
  end
end
