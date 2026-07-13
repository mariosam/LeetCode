/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func sumAndMultiply(n int) int64 {
	p := int64(1)

	x := int64(0)
	s := int64(0)
	for n > 0 {
		v := int64(n % 10)
		if v != 0 {
			s += v
			x += p * v
			p *= 10
		}
		n /= 10
	}
	return x * s
}
