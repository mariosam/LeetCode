/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findEvenNumbers(digits []int) []int {
	records := make([]int, 10)
	for _, d := range digits {
		records[d]++
	}

	results := make([]int, 0)

	var dfs func(i, x int)
	dfs = func(i, x int) {
		if i == 3 {
			results = append(results, x)
			return
		}

		for d, c := range records {
			if c > 0 && (i == 0 && d > 0 || i == 1 || i == 2 && d%2 == 0) {
				records[d]--
				dfs(i+1, x*10+d)
				records[d]++
			}
		}
	}

	dfs(0, 0)
	return results
}
