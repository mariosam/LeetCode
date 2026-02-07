/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func maxSumTrionic(nums []int) int64 {
	n := len(nums)
	i := 0
	ans := int64(math.MinInt64)
	for i < n {
		l := i
		for i++; i < n && nums[i-1] < nums[i]; {
			i++
		}
		if i == l+1 {
			continue
		}

		p := i - 1
		s := int64(nums[p-1]) + int64(nums[p])
		for i < n && nums[i-1] > nums[i] {
			s += int64(nums[i])
			i++
		}
		if i == p+1 || i == n || nums[i-1] == nums[i] {
			continue
		}

		q := i - 1
		s += int64(nums[i])
		i++
		var mx, t int64
		for i < n && nums[i-1] < nums[i] {
			t += int64(nums[i])
			i++
			mx = int64(max(int(mx), int(t)))
		}
		s += mx

		mx, t = 0, 0
		for j := p - 2; j >= l; j-- {
			t += int64(nums[j])
			mx = int64(max(int(mx), int(t)))
		}
		s += mx

		ans = int64(max(int(ans), int(s)))
		i = q
	}
	return ans
}
