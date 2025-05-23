/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func isZeroArray(nums []int, queries [][]int) bool {
	n := len(nums)
	d := make([]int, n+1)

	for _, q := range queries {
		l, r := q[0], q[1]
		d[l]++
		if r+1 < len(d) {
			d[r+1]--
		}
	}

	s := 0
	for i := 0; i < n; i++ {
		s += d[i]
		if nums[i] > s {
			return false
		}
	}

	return true
}
