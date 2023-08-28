/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func combine(n int, k int) [][]int {
	var res [][]int
	values := make([]int, k)
	i := 0

	for i >= 0 {
		values[i]++
		if values[i] > n {
			i--
		} else if i == k-1 {
			r := make([]int, k)
			copy(r, values)
			res = append(res, r)
		} else {
			i++
			values[i] = values[i-1]
		}
	}

	return res
}
