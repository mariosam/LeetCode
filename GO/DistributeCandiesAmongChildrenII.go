/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func distributeCandies(n int, limit int) int64 {
	if n > 3*limit {
		return 0
	}

	ans := comb2(int64(n + 2))
	if n > limit {
		ans -= 3 * comb2(int64(n-limit+1))
	}
	if n-2 >= 2*limit {
		ans += 3 * comb2(int64(n-2*limit))
	}

	return ans
}

func comb2(n int64) int64 {
	return n * (n - 1) / 2
}
