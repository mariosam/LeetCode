/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findJudge(n int, trust [][]int) int {
	arr := make([]int, n+1)
	rv := -1

	for i := 0; i < len(trust); i++ {
		arr[trust[i][1]]++
	}

	for j := 1; j < len(arr); j++ {
		if arr[j] == n-1 {
			rv = j
			break
		}
	}

	for i := 0; i < len(trust); i++ {
		if trust[i][0] == rv {
			return -1
		}
	}

	return rv
}
