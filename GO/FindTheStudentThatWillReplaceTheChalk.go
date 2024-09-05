/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func chalkReplacer(chalk []int, k int) int {
	s := 0
	for _, x := range chalk {
		s += x
	}
	k %= s
	for i := 0; ; i++ {
		if k < chalk[i] {
			return i
		}
		k -= chalk[i]
	}
}
