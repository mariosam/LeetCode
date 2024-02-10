/**
 * @version GO 1.21.6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func groupAnagrams(strs []string) [][]string {
	hashmap := map[string][]string{}
	for _, str := range strs {
		tmp := []byte(str)
		sort.Slice(tmp, func(i, j int) bool {
			return tmp[i] < tmp[j]
		})

		sortStr := string(tmp)
		hashmap[sortStr] = append(hashmap[sortStr], str)
	}
	result := make([][]string, 0, len(hashmap))
	for _, v := range hashmap {
		result = append(result, v)
	}

	return result
}
