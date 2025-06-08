/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func smallestEquivalentString(s1 string, s2 string, baseStr string) string {
	p := make([]int, 26)
	for i := 0; i < 26; i++ {
		p[i] = i
	}

	var find func(int) int
	find = func(x int) int {
		if p[x] != x {
			p[x] = find(p[x])
		}
		return p[x]
	}

	for i := 0; i < len(s1); i++ {
		x := int(s1[i] - 'a')
		y := int(s2[i] - 'a')
		px, py := find(x), find(y)
		if px < py {
			p[py] = px
		} else {
			p[px] = py
		}
	}

	result := make([]byte, len(baseStr))
	for i := 0; i < len(baseStr); i++ {
		result[i] = byte(find(int(baseStr[i]-'a')) + 'a')
	}

	return string(result)
}
