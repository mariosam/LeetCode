/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func countInterestingSubarrays(nums []int, modulo int, k int) int64 {
	ans := int64(0)
	prefix := 0
	prefixCount := map[int]int64{0: 1}

	for _, num := range nums {
		if num%modulo == k {
			prefix = (prefix + 1) % modulo
		}
		key := (prefix - k + modulo) % modulo
		ans += prefixCount[key]
		prefixCount[prefix] += 1
	}

	return ans
}
