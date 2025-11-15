/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func countOperations(num1 int, num2 int) int {
	if num1 == 0 || num2 == 0 {
		return 0
	} else if num1 == num2 {
		return 1
	}
	count := 0
	for num1 != 0 && num2 != 0 {
		count++
		if num1 == num2 {
			break
		} else if num1 > num2 {
			num1 -= num2
		} else {
			num2 -= num1
		}
	}
	return count
}
