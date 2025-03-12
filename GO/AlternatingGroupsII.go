/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numberOfAlternatingGroups(colors []int, k int) int {
	n := len(colors)
	res, cnt := 0, 1
	for i := -k + 2; i < n; i++ {
		if colors[(i+n)%n] != colors[(i-1+n)%n] {
			cnt++
		} else {
			cnt = 1
		}
		if cnt >= k {
			res++
		}
	}
	return res
}
