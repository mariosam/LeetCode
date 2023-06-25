/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "math"

func maxProfit(prices []int, fee int) int {
	n := len(prices)
	dp_i_0 := 0
	dp_i_1 := math.MinInt32

	for i := 0; i < n; i++ {
		temp := dp_i_0
		dp_i_0 = int(math.Max(float64(dp_i_0), float64(dp_i_1+prices[i])))
		dp_i_1 = int(math.Max(float64(dp_i_1), float64(temp-prices[i]-fee)))
	}

	return dp_i_0
}
