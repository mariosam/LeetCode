/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "strconv"

func findRelativeRanks(score []int) []string {
	result := make([]string, len(score))
	max := 0
	for _, s := range score {
		if s > max {
			max = s
		}
	}

	hash := make([]int, max+1)
	for i, s := range score {
		hash[s] = i + 1
	}

	place := 1
	for i := max; i >= 0; i-- {
		if hash[i] != 0 {
			switch place {
			case 1:
				result[hash[i]-1] = "Gold Medal"
			case 2:
				result[hash[i]-1] = "Silver Medal"
			case 3:
				result[hash[i]-1] = "Bronze Medal"
			default:
				result[hash[i]-1] = strconv.Itoa(place)
			}
			place++
		}
	}
	return result
}
