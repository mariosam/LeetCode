/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func sumGame(num string) bool {
	cnt1, cnt2, sum1, sum2 := 0, 0, 0, 0
	n := len(num)
	for i := 0; i < n/2; i++ {
		if num[i] == '?' {
			cnt1++
		} else {
			sum1 += int(num[i]) - int('0')
		}
	}
	for i := n / 2; i < n; i++ {
		if num[i] == '?' {
			cnt2++
		} else {
			sum2 += int(num[i]) - int('0')
		}
	}

	if (cnt1+cnt2)%2 != 0 {
		return true
	}

	sub := 9*(cnt1-cnt2)/2 + (sum1 - sum2)
	return sub != 0
}
