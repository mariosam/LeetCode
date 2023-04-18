/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func partitionString(s string) int {
	tmp := [26]int{}
	idx, ans := -1, 0

	for i, v := range s {
		if tmp[v-'a'] >= idx {
			idx = i + 1
			ans++
		}
		tmp[v-'a'] = i + 1
	}

	return ans
}
