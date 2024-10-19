/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minimumSteps(s string) int64 {
	var steps int64 = 0
	var blackCount int64 = 0

	for _, color := range s {
		if color == '1' {
			blackCount++
		} else {
			steps = steps + blackCount
		}
	}
	return steps
}
