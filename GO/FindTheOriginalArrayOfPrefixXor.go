/**
 * @version GO 1.21.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findArray(pref []int) []int {
	ans := make([]int, len(pref))
	ans[0] = pref[0]

	for i := 1; i < len(pref); i++ {
		ans[i] = pref[i] ^ pref[i-1]
	}

	return ans
}
