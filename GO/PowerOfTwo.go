/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func isPowerOfTwo(n int) bool {
	if n&(n-1) == 0 && n != 0 {
		return true
	}
	return false
}
