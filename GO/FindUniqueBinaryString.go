/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findDifferentBinaryString(nums []string) string {
	res := make([]byte, len(nums))

	for i := 0; i < len(nums); i++ {
		// Pega o caractere da diagonal e inverte
		if nums[i][i] == '0' {
			res[i] = '1'
		} else {
			res[i] = '0'
		}
	}

	return string(res)
}
