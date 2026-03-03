/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strconv"

func concatenatedBinary(n int) int {
	const MOD = 1000000007
	result := 0

	for i := 1; i <= n; i++ {
		binary := strconv.FormatInt(int64(i), 2)

		for j := 0; j < len(binary); j++ {
			result = (result*2 + int(binary[j]-'0')) % MOD
		}
	}

	return result
}
