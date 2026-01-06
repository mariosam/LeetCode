/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numOfWays(n int) int {
	const mod int64 = 1000000007
	var aba int64 = 6
	var abc int64 = 6

	for i := 0; i < n-1; i++ {
		tAba := (aba*3 + abc*2) % mod
		tAbc := (aba*2 + abc*2) % mod
		aba = tAba
		abc = tAbc
	}

	return int((aba + abc) % mod)
}
