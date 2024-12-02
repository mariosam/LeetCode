/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findChampion(n int, edges [][]int) int {
	greater := make([]int, n)
	for i := 0; i < n; i++ {
		greater[i] = i
	}
	for _, edge := range edges {
		greater[edge[1]] = edge[0]
	}
	valid := -1
	for i := 0; i < n; i++ {
		if greater[i] == i {
			if valid == -1 {
				valid = i
			} else {
				return -1
			}
		}
	}
	return valid
}
