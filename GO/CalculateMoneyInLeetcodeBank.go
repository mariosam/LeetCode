/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func totalMoney(n int) int {
	num, ans := 0, 0
	index := 0

	for i := 0; i < n; i++ {
		if i%7 == 0 {
			num++
			index = 0
		}
		ans += num + index*1
		index++
	}

	return ans
}
