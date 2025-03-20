/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func divideArray(nums []int) bool {
	cnt := [510]int{}
	for _, x := range nums {
		cnt[x]++
	}
	for _, v := range cnt {
		if v%2 != 0 {
			return false
		}
	}
	return true
}
