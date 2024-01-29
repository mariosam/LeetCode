/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func longestCommonSubsequence(text1 string, text2 string) int {
	text1Array := []rune(text1)
	text2Array := []rune(text2)
	m := len(text1Array)
	n := len(text2Array)
	array := make([][]int, m)
	for i := range array {
		array[i] = make([]int, n)
	}

	// init
	if text1Array[0] == text2Array[0] {
		array[0][0] = 1
	}
	for i := 1; i < m; i++ {
		array[i][0] = maxLCS(array[i-1][0], boolToInt(text1Array[i] == text2Array[0]))
	}
	for i := 1; i < n; i++ {
		array[0][i] = maxLCS(array[0][i-1], boolToInt(text2Array[i] == text1Array[0]))
	}

	// dp
	for i := 1; i < m; i++ {
		for j := 1; j < n; j++ {
			array[i][j] = maxLCS(array[i-1][j], array[i][j-1])
			if text1Array[i] == text2Array[j] {
				array[i][j] = maxLCS(array[i-1][j-1]+1, array[i][j])
			}
		}
	}

	return array[m-1][n-1]
}

func maxLCS(a, b int) int {
	if a > b {
		return a
	}
	return b
}

func boolToInt(b bool) int {
	if b {
		return 1
	}
	return 0
}
