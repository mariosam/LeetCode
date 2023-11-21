/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func minEatingSpeed(piles []int, h int) int {
	sum := 0
	for i := 0; i < len(piles); i++ {
		sum += piles[i]
	}

	l, result := sum/h, sum
	if l <= 0 {
		l = 1
	}

	for l < result {
		m := l + (result-l)/2
		if eat(piles, m) > h {
			l = m + 1
		} else {
			result = m
		}
	}

	return result
}

func eat(piles []int, speed int) int {
	n := 0

	for i := 0; i < len(piles); i++ {
		if piles[i]%speed == 0 {
			n += piles[i] / speed
		} else {
			n += piles[i]/speed + 1
		}
	}

	return n
}
