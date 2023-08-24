/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func asteroidCollision(asteroids []int) []int {
	size := len(asteroids)
	ans := make([]int, 0, size)

	for i := range asteroids {
		ans = append(ans, asteroids[i])

		i := len(ans) - 1
		for i >= 1 {
			if ans[i] == 0 {
				ans = ans[:i]
				break
			}

			if ans[i-1] < 0 || ans[i] > 0 {
				break
			}

			if ans[i-1] == -ans[i] {
				ans = ans[:i-1]
				i--
			} else if ans[i-1] > -ans[i] {
				ans = ans[:i]
				break
			} else {
				ans[i-1] = ans[i]
				ans = ans[:i]
			}

			i--
		}
	}

	return ans
}
