/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func maximumLength(nums []int) int {
	maxNum := nums[0]

	for _, x := range nums {
		if x > maxNum {
			maxNum = x
		}
	}
	count := make(map[int]int)
	for _, num := range nums {
		count[num]++
	}
	ans := 1
	if c, ok := count[1]; ok {
		if c%2 == 0 {
			ans = c - 1
		} else {
			ans = c
		}
	}
	for _, num := range nums {
		if num == 1 {
			continue
		}
		length := 0
		x := int64(num)
		for x <= int64(maxNum) {
			c, ok := count[int(x)]
			if !ok || c < 2 {
				break
			}
			length += 2
			x *= x
		}
		if _, ok := count[int(x)]; ok {
			if length+1 > ans {
				ans = length + 1
			}
		} else {
			if length-1 > ans {
				ans = length - 1
			}
		}
	}
	return ans
}
