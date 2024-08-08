/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func kthDistinct(arr []string, k int) string {
	mapCount := make(map[string]int)
	for _, s := range arr {
		mapCount[s]++
	}
	for _, s := range arr {
		if mapCount[s] == 1 {
			k--
			if k == 0 {
				return s
			}
		}
	}
	return ""
}
