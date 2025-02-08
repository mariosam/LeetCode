/**
 * @version GO 1.22.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func areAlmostEqual(s1 string, s2 string) bool {
	buf := make([][2]byte, 0)
	for i := range s1 {
		if s1[i] != s2[i] {
			buf = append(buf, [2]byte{s1[i], s2[i]})
			if len(buf) > 2 {
				return false
			}
		}
	}
	if len(buf) == 0 {
		return true
	}
	if len(buf) != 2 {
		return false
	}
	if buf[0][0] != buf[1][1] || buf[0][1] != buf[1][0] {
		return false
	}
	return true
}
