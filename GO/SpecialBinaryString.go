/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "sort"

func makeLargestSpecial(s string) string {
	cnt := 0
	i := 0
	var v []string

	for j := 0; j < len(s); j++ {
		if s[j] == '1' {
			cnt++
		} else {
			cnt--
		}

		if cnt == 0 {
			inner := s[i+1 : j]
			v = append(v, "1"+makeLargestSpecial(inner)+"0")
			i = j + 1
		}
	}

	sort.Sort(sort.Reverse(sort.StringSlice(v)))

	res := ""
	for _, str := range v {
		res += str
	}
	return res
}
