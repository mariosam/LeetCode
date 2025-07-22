/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import (
	"sort"
	"strings"
)

func removeSubfolders(folder []string) []string {
	sort.Strings(folder)
	res := []string{folder[0]}
	prev := folder[0]

	for i := 1; i < len(folder); i++ {
		s := folder[i]
		if strings.HasPrefix(s, prev) && len(s) > len(prev) && s[len(prev)] == '/' {
			continue
		} else {
			res = append(res, s)
			prev = s
		}
	}

	return res
}
