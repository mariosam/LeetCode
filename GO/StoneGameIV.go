/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func winnerSquareGame(n int) bool {
	f := make([]bool, n+1)

	for i := 1; i <= n; i++ {
		for j := 1; j*j <= i; j++ {
			if !f[i-j*j] {
				f[i] = true
				break
			}
		}
	}
	return f[n]
}
