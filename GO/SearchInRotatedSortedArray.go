/**
 * @version GO 1.21.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func search(nums []int, target int) int {
	left, right := 0, len(nums)-1
	for left < right {
		mid := (right + left) >> 1
		if nums[mid] >= nums[0] && (target > nums[mid] || target < nums[0]) {
			left = mid + 1
		} else if target > nums[mid] && target < nums[0] {
			left = mid + 1
		} else {
			right = mid
		}
	}
	if left == right && nums[left] == target {
		return left
	}
	return -1
}
