/**
 * @version GO 1.19.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func longestCommonPrefix(strs []string) string {
	result := ""

	//toma a menor string como base
	sort.Strings(strs)

	//percorre a menor string ate o final
outer:
	for j := 1; j <= len(strs[0]); j++ {
		temp := strs[0][:j]

		//percorre o array
		for i := 1; i < len(strs); i++ {
			//compara a menor string com as opcoes do array
			if temp != strs[i][:j] {
				break outer
			}
		}

		result = temp
	}

	return result
}
