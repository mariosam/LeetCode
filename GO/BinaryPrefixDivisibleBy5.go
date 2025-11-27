/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func prefixesDivBy5(nums []int) []bool {
	result := make([]bool, 0, len(nums))
	remainder := 0

	for _, a := range nums {
		remainder = ((remainder << 1) + a) % 5
		result = append(result, remainder == 0)
	}

	return result
}
