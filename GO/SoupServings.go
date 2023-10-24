/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func soupServings(n int) float64 {
	if n > 4800 {
		return 1.0
	}

	servings := n / 25
	if n%25 != 0 {
		servings++
	}

	memo := make([][]float64, servings+1)
	for i := range memo {
		memo[i] = make([]float64, servings+1)
		for j := range memo[i] {
			memo[i][j] = -1.0
		}
	}

	return helperSoup(servings, servings, memo)
}

func helperSoup(a, b int, memo [][]float64) float64 {
	if a <= 0 && b <= 0 {
		return 0.5
	}

	if a <= 0 {
		return 1.0
	}

	if b <= 0 {
		return 0.0
	}

	if memo[a][b] > -1.0 {
		return memo[a][b]
	}

	p := 0.0
	for i := 1; i <= 4; i++ {
		p += 0.25 * helperSoup(a-i, b-(4-i), memo)
	}

	memo[a][b] = p
	return p
}
