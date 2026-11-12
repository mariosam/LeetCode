# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule FindTheDistanceValueBetweenTwoArrays do
  @spec find_the_distance_value(arr1 :: [integer], arr2 :: [integer], d :: integer) :: integer
  def find_the_distance_value(arr1, arr2, d) do
    Enum.reduce(arr1, 0, fn num1, res ->
        valid =
        Enum.all?(arr2, fn num2 ->
            abs(num1 - num2) > d
        end)

        if valid, do: res + 1, else: res
    end)
  end
end
