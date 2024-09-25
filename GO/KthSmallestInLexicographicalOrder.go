/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func findKthNumber(n int, k int) int {
	curr := 1
	k -= 1

	for k > 0 {
		steps := calSteps(n, curr, curr+1)
		if steps <= k {
			curr += 1
			k -= steps
		} else {
			curr *= 10
			k -= 1
		}
	}

	return curr
}

func calSteps(n int, n1 int, n2 int) int {
	steps := 0

	for n1 <= n {
		steps += min(n+1, n2) - n1
		n1 *= 10
		n2 *= 10
	}

	return steps
}

func min(a, b int) int {
	if a < b {
		return a
	}
	return b
}
