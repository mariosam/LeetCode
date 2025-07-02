/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func numSubseq(nums []int, target int) int {
	mod := 1000*1000*1000 + 7
	n := len(nums)

	pows := make([]int, n+1)
	pows[0] = 1
	for i := 1; i <= n; i++ {
		pows[i] = (pows[i-1] * 2) % mod
	}

	answer := 0

	sort.Ints(nums[:])

	right := n - 1
	for left := 0; left < n; left++ {
		for ; right >= left && nums[right]+nums[left] > target; right-- {
		}

		if left <= right {
			free := right - left
			answer += pows[free]
			if answer >= mod {
				answer -= mod
			}
		}
	}

	return answer
}
