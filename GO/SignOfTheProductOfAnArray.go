/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func arraySign(nums []int) int {
	var signFunc = func(num int) int {
		if num > 0 {
			return 1
		} else if num < 0 {
			return -1
		} else {
			return 0
		}
	}

	res := 1
	for _, num := range nums {
		res *= signFunc(num)
	}

	return res
}
