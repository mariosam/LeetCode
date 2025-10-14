/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

import "slices"

func maximumEnergy(energy []int, k int) int {
	n := len(energy)
	f := make([]int, n+1)
	for i := n - 1; i >= 0; i-- {
		f[i] = energy[i] + f[min(n, i+k)]
	}

	return slices.Max(f[:n])
}
