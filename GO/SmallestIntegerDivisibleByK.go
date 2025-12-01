/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func smallestRepunitDivByK(k int) int {
	if k%2 == 0 || k%5 == 0 {
		return -1
	}

	n := 1
	count := 1

	for n%k != 0 {
		n = (n*10 + 1) % k
		count++
	}

	return count
}
