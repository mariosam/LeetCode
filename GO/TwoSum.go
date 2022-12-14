/**
 * @version GO 1.19.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func twoSum(nums []int, target int) []int {
	for x := 0; x < len(nums); x++ {
		for y := x + 1; y < len(nums); y++ {
			if nums[x]+nums[y] == target {
				return []int{x, y}
			}
		}
	}
	return []int{}
}
