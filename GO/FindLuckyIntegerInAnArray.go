/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findLucky(arr []int) int {
	cnt := [501]int{}
	for _, x := range arr {
		cnt[x]++
	}
	for x := len(cnt) - 1; x > 0; x-- {
		if x == cnt[x] {
			return x
		}
	}
	return -1
}
