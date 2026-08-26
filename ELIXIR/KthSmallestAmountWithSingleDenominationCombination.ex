# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

import Bitwise

defmodule KthSmallestAmountWithSingleDenominationCombination do
  @spec find_kth_smallest(coins :: [integer], k :: integer) :: integer
  def find_kth_smallest(coins, k) do
    n = length(coins)
    m = 1 <<< n

    lcm = :array.set(0, 1, :array.new(m, default: 0))

    lcm =
      Enum.with_index(coins)
      |> Enum.reduce(lcm, fn {v, i}, lcm ->
        limit = 1 <<< i

        Enum.reduce(0..(limit - 1), lcm, fn j, acc ->
          current = :array.get(j, acc)
          g = gcd(current, v)
          value = div(v, g) * current

          :array.set(j ||| (1 <<< i), value, acc)
        end)
      end)

    binary_search(k, lcm, m, 1, hd(coins) * k)
  end

  defp binary_search(_k, _lcm, _m, left, right)
       when left > right do
    left
  end

  defp binary_search(k, lcm, m, left, right) do
    mid = div(left + right, 2)

    count =
      Enum.reduce(1..(m - 1), 0, fn i, acc ->
        value = div(mid, :array.get(i, lcm))

        if rem(bit_count(i), 2) == 0 do
          acc - value
        else
          acc + value
        end
      end)

    if count >= k do
      binary_search(k, lcm, m, left, mid - 1)
    else
      binary_search(k, lcm, m, mid + 1, right)
    end
  end

  defp gcd(a, b) when a > 0 do
    gcd(rem(b, a), a)
  end

  defp gcd(_a, b), do: b

  defp bit_count(0), do: 0

  defp bit_count(n) do
    1 + bit_count(n &&& (n - 1))
  end
end
