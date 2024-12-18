/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func continuousSubarrays(nums []int) int64 {
	ans := int64(0)
	i := 0
	n := len(nums)
	tm := make(map[int]int)

	for j := 0; j < n; j++ {
		tm[nums[j]]++
		for maxKey(tm)-minKey(tm) > 2 {
			tm[nums[i]]--
			if tm[nums[i]] == 0 {
				delete(tm, nums[i])
			}
			i++
		}
		ans += int64(j - i + 1)
	}
	return ans
}

func maxKey(tm map[int]int) int {
	max := -1 << 31
	for k := range tm {
		if k > max {
			max = k
		}
	}
	return max
}

func minKey(tm map[int]int) int {
	min := 1<<31 - 1
	for k := range tm {
		if k < min {
			min = k
		}
	}
	return min
}
