/**
 * @version GO 1.26,0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func mirrorDistance(n int) int {
	reverse := func(x int) int {
		y := 0
		for ; x > 0; x /= 10 {
			y = y*10 + x%10
		}
		return y
	}
	return absDis(n - reverse(n))
}

func absDis(x int) int {
	if x < 0 {
		return -x
	}
	return x
}
