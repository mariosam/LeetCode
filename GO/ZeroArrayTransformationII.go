/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minZeroArray(nums []int, queries [][]int) int {
	line := make([]int, len(nums)+1)
	decrement := 0
	k := 0

	for i := 0; i < len(nums); i++ {
		for decrement+line[i] < nums[i] {
			if k == len(queries) {
				return -1
			}
			l, r, val := queries[k][0], queries[k][1], queries[k][2]
			k++
			if r < i {
				continue
			}
			line[maxZero(l, i)] += val
			line[r+1] -= val
		}
		decrement += line[i]
	}
	return k
}

func maxZero(a, b int) int {
	if a > b {
		return a
	}
	return b
}
