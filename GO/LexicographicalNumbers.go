/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func lexicalOrder(n int) []int {
	list := make([]int, 0, n)
	curr := 1

	for i := 1; i <= n; i++ {
		list = append(list, curr)
		if curr*10 <= n {
			curr *= 10
		} else if curr%10 != 9 && curr+1 <= n {
			curr++
		} else {
			for (curr/10)%10 == 9 {
				curr /= 10
			}
			curr = curr/10 + 1
		}
	}

	return list
}
