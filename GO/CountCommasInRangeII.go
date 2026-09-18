/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func countCommasII(n int64) int64 {
	var ans int64 = 0

	for x := int64(1000); x <= n; x *= 1000 {
		ans += n - x + 1
	}
	return ans
}
