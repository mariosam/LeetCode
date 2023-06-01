/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minimizeArrayValue(A []int) int {
	sum := 0
	res := 0
	for i := 0; i < len(A); i++ {
		sum += A[i]
		res = max(res, (sum+i)/(i+1))
	}
	return res
}

func max(a, b int) int {
	if a > b {
		return a
	}
	return b
}
