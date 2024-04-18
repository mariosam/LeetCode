/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func trap(height []int) int {
	n := len(height)
	idx, lefth, righth, area := 0, 0, 0, 0

	for i := 0; i < n; i++ {
		if height[idx] <= height[i] {
			idx = i
		}
	}

	for i := 0; i < idx; i++ {
		if height[i] < lefth {
			area += lefth - height[i]
		} else {
			lefth = height[i]
		}
	}

	for i := n - 1; i > idx; i-- {
		if height[i] < righth {
			area += righth - height[i]
		} else {
			righth = height[i]
		}
	}

	return area
}
