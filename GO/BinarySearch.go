/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func search(nums []int, target int) int {
	start := 0
	end := len(nums) - 1
	center := 0

	for start <= end {
		center = (start + end) / 2
		if nums[center] == target {
			return center
		} else if nums[center] < target {
			start = center + 1
		} else {
			end = center - 1
		}
	}

	return -1
}
