/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maximumDifference(nums []int) int {
	ans := -1
	mn := nums[0]

	for i := 1; i < len(nums); i++ {
		if nums[i] > mn {
			if nums[i]-mn > ans {
				ans = nums[i] - mn
			}
		}
		if nums[i] < mn {
			mn = nums[i]
		}
	}

	return ans
}
