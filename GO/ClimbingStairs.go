/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func climbStairs(n int) int {
	if n == 1 {
		return 1
	}

	ways := make([]int, n)
	ways[0] = 1
	ways[1] = 2

	for stairs := 3; stairs <= n; stairs++ {
		ways[stairs-1] = ways[stairs-2] + ways[stairs-3]
	}

	return ways[n-1]
}
