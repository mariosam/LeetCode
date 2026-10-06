/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func generateParenthesis(n int) []string {
	ans := []string{}

	cur := make([]byte, 0)
	var dfs func(left, right int)
	dfs = func(left, right int) {
		if left == 0 && right == 0 {
			tmp := make([]byte, len(cur))
			copy(tmp, cur)
			ans = append(ans, string(cur))
			return
		}
		if left > right {
			return
		}
		if left > 0 {
			cur = append(cur, '(')
			dfs(left-1, right)
			cur = cur[:len(cur)-1]
		}
		if right > 0 {
			cur = append(cur, ')')
			dfs(left, right-1)
			cur = cur[:len(cur)-1]
		}
	}
	dfs(n, n)
	return ans
}
