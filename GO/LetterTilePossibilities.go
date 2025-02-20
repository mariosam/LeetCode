/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func numTilePossibilities(tiles string) int {
	record := make([]int, 26)
	for _, c := range tiles {
		record[c-'A']++
	}
	return dfsNum(record)
}

func dfsNum(arr []int) int {
	sum := 0
	for i := 0; i < 26; i++ {
		if arr[i] == 0 {
			continue
		}
		sum++
		arr[i]--
		sum += dfsNum(arr)
		arr[i]++
	}
	return sum
}
