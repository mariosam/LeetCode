/**
 * @version GO 1.27.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findTheDistanceValue(arr1 []int, arr2 []int, d int) int {
	res := 0
	for i := range arr1 {
		for j := range arr2 {
			var delta int
			if arr1[i] > arr2[j] {
				delta = arr1[i] - arr2[j]
			} else {
				delta = arr2[j] - arr1[i]
			}
			if delta <= d {
				break
			}
			if j == len(arr2)-1 {
				res++
			}
		}
	}
	return res
}
