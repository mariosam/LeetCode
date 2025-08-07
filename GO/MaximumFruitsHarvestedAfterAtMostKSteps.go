/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func maxTotalFruits(fruits [][]int, startPos int, k int) int {
	n := len(fruits)
	maxVal := startPos
	for i := 0; i < n; i++ {
		if fruits[i][0] > maxVal {
			maxVal = fruits[i][0]
		}
	}

	nums := make([]int, maxVal+1)
	for i := 0; i < n; i++ {
		pos := fruits[i][0]
		val := fruits[i][1]
		nums[pos] += val
	}

	presum := make([]int, maxVal+2)
	for i := 1; i < len(presum); i++ {
		presum[i] = presum[i-1] + nums[i-1]
	}

	res := 0
	for i := 0; i <= startPos; i++ {
		leftDis := startPos - i
		if leftDis > k {
			continue
		}
		left := k - (2 * leftDis)
		maxRight := int(math.Min(float64(maxVal), float64(startPos+left)))
		res = maxFruits(res, presum[maxRight+1]-presum[i])

		maxRight2 := int(math.Min(float64(maxVal), float64(startPos+(k-leftDis)/2)))
		res = maxFruits(res, presum[maxRight2+1]-presum[i])
	}
	return res
}

func maxFruits(a, b int) int {
	if a > b {
		return a
	}
	return b
}
