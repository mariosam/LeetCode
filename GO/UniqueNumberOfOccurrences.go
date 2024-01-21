/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func uniqueOccurrences(arr []int) bool {
	resMap := map[int]int{}
	for _, item := range arr {
		if _, ok := resMap[item]; ok {
			resMap[item]++
			continue
		}
		resMap[item] = 1
	}
	resNewMap := map[int]int{}
	for _, item := range resMap {
		if _, ok := resNewMap[item]; ok {
			return false
		}
		resNewMap[item] = 1
	}

	return true
}
