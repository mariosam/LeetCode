/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strconv"

func compareVersion(version1 string, version2 string) int {
	i, j := 0, 0
	var temp1, temp2 int

	for i < len(version1) || j < len(version2) {
		temp1, i = getNextChunk(version1, i)
		temp2, j = getNextChunk(version2, j)

		if temp1 == temp2 {
			i++
			j++
			continue
		} else if temp1 < temp2 {
			return -1
		} else {
			return 1
		}
	}

	return 0
}

func getNextChunk(version string, start int) (int, int) {
	if start >= len(version) {
		return 0, start
	}

	end := start
	for end < len(version) && version[end] != '.' {
		end++
	}

	temp, _ := strconv.Atoi(version[start:end])
	return temp, end
}
