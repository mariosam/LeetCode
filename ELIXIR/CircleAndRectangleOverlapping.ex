# @version Elixir 1.20.3
# @author MARIO SAM <eu@mariosam.com.br>
# @see I would love to work with you instead solving web code tests: hire me!

defmodule CircleAndRectangleOverlapping do
  @spec check_overlap(radius :: integer, x_center :: integer, y_center :: integer, x1 :: integer, y1 :: integer, x2 :: integer, y2 :: integer) :: boolean
  def check_overlap(radius, x_center, y_center, x1, y1, x2, y2) do
    res = 0
    res =
        if x_center < x1 or x_center > x2 do
        res + min(
            (x1 - x_center) * (x1 - x_center),
            (x_center - x2) * (x_center - x2)
        )
        else
        res
        end

    res =
        if y_center < y1 or y_center > y2 do
        res + min(
            (y1 - y_center) * (y1 - y_center),
            (y_center - y2) * (y_center - y2)
        )
        else
        res
        end
    res <= radius * radius
  end
end
