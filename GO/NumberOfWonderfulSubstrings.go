/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func wonderfulSubstrings(word string) int64 {
	var ans int64
	mask := 0
	freq := [1024]int{0: 1}
	for _, c := range word {
		mask ^= 1 << (c - 'a')
		ans += int64(freq[mask])
		for i := 0; i < 10; i++ {
			ans += int64(freq[mask^(1<<i)])
		}
		freq[mask]++
	}
	return ans
}
