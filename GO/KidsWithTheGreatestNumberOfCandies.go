/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func kidsWithCandies(candies []int, extraCandies int) []bool {
	max := 0
	out := make([]bool, len(candies))

	for _, v := range candies {
		if v > max {
			max = v
		}
	}

	for i, v := range candies {
		if v+extraCandies >= max {
			out[i] = true
		}
	}

	return out
}
