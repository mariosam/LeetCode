/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func replaceNonCoprimes(nums []int) []int {
	res := []int{}
	for _, x := range nums {
		res = append(res, x)
		for len(res) > 1 {
			t1 := res[len(res)-1]
			t2 := res[len(res)-2]
			g := gcd2(t1, t2)
			if g <= 1 {
				break
			}
			res = res[:len(res)-1]
			res[len(res)-1] = t1 * (t2 / g)
		}
	}
	return res
}

func gcd2(a, b int) int {
	if b == 0 {
		return a
	}
	return gcd(b, a%b)
}
