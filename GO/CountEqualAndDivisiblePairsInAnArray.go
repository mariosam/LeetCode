/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func countPairs(nums []int, k int) int {
	m := make(map[int][]int)
	for i, v := range nums {
		m[v] = append(m[v], i)
	}

	r := 0
	for _, is := range m {
		for i := 0; i < len(is)-1; i++ {
			for j := i + 1; j < len(is); j++ {
				if is[i]*is[j]%k == 0 {
					r++
				}
			}
		}
	}
	return r
}
