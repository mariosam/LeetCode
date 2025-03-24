/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func longestNiceSubarray(nums []int) int {
	i, mask, res := 0, 0, 0

	for j := 0; j < len(nums); j++ {
		e := nums[j]
		for (mask & e) != 0 {
			mask ^= nums[i]
			i++
		}
		mask |= e
		if j-i+1 > res {
			res = j - i + 1
		}
	}
	return res
}
