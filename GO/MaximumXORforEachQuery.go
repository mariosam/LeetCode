/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func getMaximumXor(nums []int, maximumBit int) []int {
	n := len(nums)
	res := make([]int, n)
	max := 1<<maximumBit - 1
	v := 0
	for i, x := range nums {
		v ^= x
		res[n-1-i] = max ^ v
	}

	return res
}
