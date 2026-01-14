/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maximalRectangle(matrix [][]byte) int {
	m := len(matrix)
	if m == 0 {
		return 0
	}
	n := len(matrix[0])

	left := make([]int, n)
	right := make([]int, n)
	height := make([]int, n)
	for i := range right {
		right[i] = n
	}

	maxArea := 0

	for i := 0; i < m; i++ {
		// update height
		for j := 0; j < n; j++ {
			if matrix[i][j] == '1' {
				height[j]++
			} else {
				height[j] = 0
			}
		}

		// update left
		curLeft := 0
		for j := 0; j < n; j++ {
			if matrix[i][j] == '1' {
				if left[j] < curLeft {
					left[j] = curLeft
				}
			} else {
				left[j] = 0
				curLeft = j + 1
			}
		}

		// update right
		curRight := n
		for j := n - 1; j >= 0; j-- {
			if matrix[i][j] == '1' {
				if right[j] > curRight {
					right[j] = curRight
				}
			} else {
				right[j] = n
				curRight = j
			}
		}

		// compute area
		for j := 0; j < n; j++ {
			area := (right[j] - left[j]) * height[j]
			if area > maxArea {
				maxArea = area
			}
		}
	}

	return maxArea
}
