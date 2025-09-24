/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minimumTeachings(n int, languages [][]int, friendships [][]int) int {
	langMap := make(map[int]map[int]bool)
	for i, langs := range languages {
		set := make(map[int]bool)
		for _, l := range langs {
			set[l] = true
		}
		langMap[i+1] = set
	}

	canCommunicate := make([]bool, len(friendships))
	for i := 1; i <= n; i++ {
		for j, f := range friendships {
			f1, f2 := f[0], f[1]
			if langMap[f1][i] && langMap[f2][i] {
				canCommunicate[j] = true
			}
		}
	}

	minTeach := len(friendships)
	for i := 1; i <= n; i++ {
		teach := make(map[int]bool)
		for j, f := range friendships {
			if !canCommunicate[j] {
				f1, f2 := f[0], f[1]
				if !langMap[f1][i] {
					teach[f1] = true
				}
				if !langMap[f2][i] {
					teach[f2] = true
				}
			}
		}
		if len(teach) < minTeach {
			minTeach = len(teach)
		}
	}

	return minTeach
}
