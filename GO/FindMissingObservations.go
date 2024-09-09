/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func missingRolls(rolls []int, mean int, n int) []int {
	totalSum := mean * (len(rolls) + n)
	currentSum := 0
	for _, roll := range rolls {
		currentSum += roll
	}
	sum := totalSum - currentSum

	if sum < n || sum > 6*n {
		return []int{} // Return an empty slice if the required sum is out of bounds
	}

	result := make([]int, n)
	x := sum / n
	y := sum % n

	for i := 0; i < n; i++ {
		if i < y {
			result[i] = x + 1
		} else {
			result[i] = x
		}
	}

	return result
}
