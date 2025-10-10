/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maxArea(height []int) int {
	max := 0
	i, j := 0, len(height)-1

	for i < j {
		width := j - i
		h := height[i]
		if height[j] < h {
			h = height[j]
		}
		area := width * h
		if area > max {
			max = area
		}

		if height[i] < height[j] {
			i++
		} else {
			j--
		}
	}

	return max
}
