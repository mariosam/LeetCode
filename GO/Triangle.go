/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minimumTotal(triangle [][]int) int {
    if len(triangle) == 0 {
		return 0
	}
	if len(triangle) == 1 {
		return triangle[0][0]
	}

	curr := make([]int, len(triangle))
	for i := range curr {
		curr[i] = math.MaxInt32
	}
	curr[0] = triangle[0][0]
	minVal := math.MaxInt32

	for i := 1; i < len(triangle); i++ {
		row := triangle[i]
		prev := make([]int, len(curr))
		copy(prev, curr)
		for j := 0; j < len(row); j++ {
			if j == 0 {
				curr[j] = prev[0] + row[j]
			} else if j == len(row)-1 {
				curr[j] = prev[len(row)-2] + row[j]
			} else {
				if prev[j-1] < prev[j] {
					curr[j] = prev[j-1] + row[j]
				} else {
					curr[j] = prev[j] + row[j]
				}
			}
			if i == len(triangle)-1 && curr[j] < minVal {
				minVal = curr[j]
			}
		}
	}
	return minVal
}
