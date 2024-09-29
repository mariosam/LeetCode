/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strconv"

func longestCommonPrefix(arr1 []int, arr2 []int) int {
	set := make(map[int]struct{})
	for _, x := range arr1 {
		for x > 0 {
			set[x] = struct{}{}
			x /= 10
		}
	}

	ans := 0
	for _, x := range arr2 {
		for x > 0 {
			if _, ok := set[x]; ok {
				ans = max(ans, len(strconv.Itoa(x)))
				break
			}
			x /= 10
		}
	}
	return ans
}

func max(a, b int) int {
	if a > b {
		return a
	}
	return b
}
