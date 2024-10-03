/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strconv"

func diffWaysToCompute(expression string) []int {
	var result []int
	for i := 0; i < len(expression); i++ {
		switch expression[i] {
		case '+', '-', '*':
			left := diffWaysToCompute(expression[:i])
			right := diffWaysToCompute(expression[i+1:])

			for _, l := range left {
				for _, r := range right {
					switch expression[i] {
					case '+':
						result = append(result, l+r)
					case '-':
						result = append(result, l-r)
					case '*':
						result = append(result, l*r)
					}
				}
			}
		}
	}
	if len(result) == 0 {
		num, _ := strconv.Atoi(expression)
		result = append(result, num)
	}
	return result
}
