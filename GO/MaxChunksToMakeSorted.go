/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maxChunksToSorted(arr []int) int {
	ans, mx := 0, 0
	for i, v := range arr {
		mx = max(mx, v)
		if i == mx {
			ans++
		}
	}
	return ans
}
