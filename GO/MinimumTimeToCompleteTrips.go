/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "fmt"

func minimumTime(time []int, totalTrips int) int64 {
	maxValue := 0
	for i := 0; i < len(time); i++ {
		maxValue = max(maxValue, time[i])
	}

	left := int64(1)
	right := int64(totalTrips) * int64(maxValue)
	//fmt.Println("valor de right: ", right)

	for left < right {
		mid := left + (right-left)/2
		fmt.Println("valor de mid: ", mid)
		if check(time, mid) >= totalTrips {
			right = mid
		} else {
			left = mid + 1
		}
	}

	return left
}

func check(arr []int, per int64) int {
	count := 0
	for i := 0; i < len(arr); i++ {
		count = count + int(per/int64(arr[i]))
	}
	fmt.Println("voltando cont: ", count)
	return count
}

func max(a, b int) int {
	if a > b {
		return a
	}
	return b
}
