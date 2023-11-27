/**
 * @version GO 1.21.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func kthGrammar(n int, k int) int {
	if k == 1 {
		return 0
	}

	if k%2 == 0 {
		r := kthGrammar(n, k/2)
		if r == 0 {
			r = 1
		} else if r == 1 {
			r = 0
		}
		return r
	}

	return kthGrammar(n, (k+1)/2)
}
