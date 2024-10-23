/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findKthBit(n int, k int) byte {
	var dfs func(n, k int) int
	dfs = func(n, k int) int {
		if k == 1 {
			return 0
		}
		if k&(k-1) == 0 {
			return 1
		}
		m := 1 << n
		if k*2 < m-1 {
			return dfs(n-1, k)
		}
		return dfs(n-1, m-k) ^ 1
	}
	return byte('0' + dfs(n, k))
}
