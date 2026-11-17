/**
 * @version GO 1.27.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func countNonDecreasingSubarrays(nums []int, k int) int64 {
	var ans int64
	var cost int64

	type Pair struct {
		num   int
		count int
	}
	dq := []Pair{}

	for i, j := len(nums)-1, len(nums)-1; i >= 0; i-- {
		num := nums[i]
		count := 1

		for len(dq) > 0 && dq[len(dq)-1].num < num {
			next := dq[len(dq)-1]
			dq = dq[:len(dq)-1]
			count += next.count
			cost += int64(num-next.num) * int64(next.count)
		}
		dq = append(dq, Pair{num, count})

		for cost > int64(k) {
			rightmost := dq[0]
			dq = dq[1:]
			cost -= int64(rightmost.num - nums[j])
			j--
			if rightmost.count > 1 {
				dq = append([]Pair{{rightmost.num, rightmost.count - 1}}, dq...)
			}
		}
		ans += int64(j - i + 1)
	}
	return ans
}
