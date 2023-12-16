/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findTheDifference(s string, t string) byte {
	c := byte(0)

	for i := 0; i < len(s); i++ {
		c ^= s[i]
	}

	for i := 0; i < len(t); i++ {
		c ^= t[i]
	}

	return c
}
