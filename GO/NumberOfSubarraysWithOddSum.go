/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numOfSubarrays(arr []int) int {
	cntEven, cntOdd, prefix, res := 1, 0, 0, 0
	const MOD int = 1000000007

	for _, a := range arr {
		prefix += a
		if prefix%2 == 0 {
			res = (res + cntOdd) % MOD
			cntEven++
		} else {
			res = (res + cntEven) % MOD
			cntOdd++
		}
	}
	return res
}
