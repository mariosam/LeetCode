/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numberOfBeams(bank []string) int {
	comb := func(num1, num2 int) int {
		return num1 * num2
	}

	m := len(bank)
	n := 0
	if m > 0 {
		n = len(bank[0])
	}

	if m == 0 || n == 0 {
		return 0
	}

	pre := 0
	res := 0

	for j := 0; j < n; j++ {
		if bank[0][j] == '1' {
			pre++
		}
	}

	for i := 1; i < m; i++ {
		chk := 0
		cur := bank[i]

		for j := 0; j < n; j++ {
			if cur[j] == '1' {
				chk++
			}
		}

		if chk > 0 {
			res += comb(pre, chk)
			pre = chk
		}
	}

	return res
}
