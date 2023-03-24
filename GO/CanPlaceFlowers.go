/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func canPlaceFlowers(flowerbed []int, n int) bool {
	last := -2

	for i, v := range flowerbed {
		if v == 1 {
			last = i
		} else if i-last == 2 && (i == len(flowerbed)-1 || flowerbed[i+1] != 1) {
			n--
			last = i
		}
	}

	return n <= 0
}
