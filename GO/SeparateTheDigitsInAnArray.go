/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func separateDigits(nums []int) []int {
	var res []int

	for _, x := range nums {
		var cur []int
		for x > 0 {
			cur = append(cur, x%10)
			x /= 10
		}
		// reverse cur
		for i, j := 0, len(cur)-1; i < j; i, j = i+1, j-1 {
			cur[i], cur[j] = cur[j], cur[i]
		}
		res = append(res, cur...)
	}
	return res
}
