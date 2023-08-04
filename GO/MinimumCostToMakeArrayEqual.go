/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func minCost(nums []int, cost []int) int64 {
	n, mi, ma, ans := len(nums), math.MaxInt, math.MinInt, int64(0)
	for _, num := range nums {
		if mi > num {
			mi = num
		}
		if ma < num {
			ma = num
		}
	}
	for i, num := range nums {
		ans += int64(num-mi) * int64(cost[i])
	}
	abs := func(a int) int {
		if a < 0 {
			return -a
		} else {
			return a
		}
	}
	min2 := func(a, b int64) int64 {
		if a < b {
			return a
		} else {
			return b
		}
	}

	L, R := mi, ma
	for L < R {
		mid, cur, right := L+(R-L)>>1, int64(0), int64(0)
		for i := 0; i < n; i++ {
			cur += int64(abs(nums[i]-mid)) * int64(cost[i])
			right += int64(abs(nums[i]-mid-1)) * int64(cost[i])
		}
		ans = min2(ans, min2(cur, right))
		if cur < right {
			R = mid
		} else {
			L = mid + 1
		}
	}
	return ans
}
