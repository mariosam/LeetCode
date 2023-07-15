/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func putMarbles(weights []int, k int) int64 {
	var ans int64
	n := len(weights)
	arr := make([]int, n-1)

	for i, w := range weights[:n-1] {
		arr[i] = w + weights[i+1]
	}

	sort.Ints(arr)
	for i := 0; i < k-1; i++ {
		ans += int64(arr[n-2-i] - arr[i])
	}

	return ans
}
