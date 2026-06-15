/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func leftRightDifference(nums []int) []int {
	l, r := 0, 0
	for _, x := range nums {
		r += x
	}
	n := len(nums)
	ans := make([]int, n)
	for i, x := range nums {
		r -= x
		ans[i] = absLR(l - r)
		l += x
	}
	return ans
}

func absLR(x int) int {
	if x < 0 {
		return -x
	}
	return x
}
