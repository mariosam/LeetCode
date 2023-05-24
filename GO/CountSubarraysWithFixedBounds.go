/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func countSubarrays(nums []int, minK int, maxK int) (tot int64) {
	var l, r1, r2 = -1, -1, -1
	for i := range nums {
		if nums[i] > maxK || nums[i] < minK {
			l = i
		}
		if nums[i] == minK {
			r1 = i
		}
		if nums[i] == maxK {
			r2 = i
		}

		tot += int64(max(0, min(r1, r2)-l))
	}

	return
}

func min(a, b int) int {
	if a < b {
		return a
	}
	return b
}

func max(a, b int) int {
	if a > b {
		return a
	}
	return b
}
