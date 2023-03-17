/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findKthPositive(arr []int, k int) int {
	positiveNaturalNumber := arr[0]
	missingCount := arr[0] - 1
	if missingCount >= k {
		return k
	}

	for i := 1; i < len(arr); i++ {
		positiveNaturalNumber++
		if positiveNaturalNumber != arr[i] {
			missingCount++
			i--
			if missingCount == k {
				return positiveNaturalNumber
			}
		}
	}

	return (positiveNaturalNumber) + (k - missingCount)
}
