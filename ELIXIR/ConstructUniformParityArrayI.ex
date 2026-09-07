# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule ConstructUniformParityArrayI do
  @spec uniform_array(nums1 :: [integer]) :: boolean
  def uniform_array(nums1) do
    {even_cnt, odd_cnt} =

    Enum.reduce(nums1, {0, 0}, fn num, {even_cnt, odd_cnt} ->

      if rem(num, 2) == 0 do

        {even_cnt + 1, odd_cnt}

      else

        {even_cnt, odd_cnt + 1}

      end

    end)

  (even_cnt >= 1 and odd_cnt >= 1) or

    even_cnt == 0 or

    odd_cnt == 0
  end
end
