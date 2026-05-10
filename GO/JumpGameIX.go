/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maxValue(nums []int) []int {
	n := len(nums)

	if n == 0 {
		return []int{}
	}
	res := make([]int, n)
	leftmax := make([]int, n)
	leftmax[0] = nums[0]
	for i := 1; i < n; i++ {
		if leftmax[i-1] > nums[i] {
			leftmax[i] = leftmax[i-1]
		} else {
			leftmax[i] = nums[i]
		}
	}
	rightmin := make([]int, n)
	rightmin[n-1] = nums[n-1]
	for k := n - 2; k >= 0; k-- {
		if rightmin[k+1] < nums[k] {
			rightmin[k] = rightmin[k+1]
		} else {
			rightmin[k] = nums[k]
		}
	}
	res[n-1] = leftmax[n-1]
	for i := n - 2; i >= 0; i-- {
		res[i] = leftmax[i]
		if leftmax[i] > rightmin[i+1] {
			res[i] = res[i+1]
		}
	}
	return res
}
