/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minimumPairRemoval(nums []int) int {
	arr := append([]int{}, nums...)
	ans := 0

	for !isNonDecreasing(arr) {
		k := 0
		s := arr[0] + arr[1]

		for i := 1; i < len(arr)-1; i++ {
			t := arr[i] + arr[i+1]
			if s > t {
				s = t
				k = i
			}
		}

		arr[k] = s
		arr = append(arr[:k+1], arr[k+2:]...)
		ans++
	}

	return ans
}

func isNonDecreasing(arr []int) bool {
	for i := 1; i < len(arr); i++ {
		if arr[i] < arr[i-1] {
			return false
		}
	}
	return true
}
