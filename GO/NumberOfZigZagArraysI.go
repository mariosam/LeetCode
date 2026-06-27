/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func zigZagArrays(n int, l int, r int) int {
	r -= l

	dp := make([]int64, r+1)
	for i := range dp {
		dp[i] = 1
	}
	const mod int64 = 1000000007
	for i := 1; i < n; i++ {
		var pre int64 = 0
		if i&1 == 1 {
			for v := 0; v <= r; v++ {
				pre2 := pre + dp[v]
				dp[v] = pre
				pre = pre2 % mod
			}
		} else {
			for v := r; v >= 0; v-- {
				pre2 := pre + dp[v]
				dp[v] = pre
				pre = pre2 % mod
			}
		}
	}
	var sum int64 = 0
	for _, x := range dp {
		sum += x
	}
	return int((sum * 2) % mod)
}
