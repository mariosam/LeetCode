/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func lemonadeChange(bills []int) bool {
	five, ten := 0, 0

	for _, bill := range bills {
		if bill == 5 {
			five++
		} else if bill == 10 {
			five--
			ten++
		} else if ten > 0 {
			ten--
			five--
		} else {
			five -= 3
		}

		if five < 0 {
			return false
		}
	}

	return true
}
