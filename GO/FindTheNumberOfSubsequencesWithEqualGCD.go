/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

const MOD = 1000000007

func subsequencePairCount(nums []int) int {
	mem := make(map[[3]int]int)

	return dfsGCD(nums, 0, 0, 0, mem)

}

func dfsGCD(nums []int, i, x, y int, mem map[[3]int]int) int {

	if i == len(nums) {
		if x > 0 && x == y {
			return 1
		}
		return 0
	}
	key := [3]int{i, x, y}
	if v, ok := mem[key]; ok {
		return v
	}
	skip := dfsGCD(nums, i+1, x, y, mem)
	take1 := dfsGCD(nums, i+1, gcdFTN(x, nums[i]), y, mem)
	take2 := dfsGCD(nums, i+1, x, gcdFTN(y, nums[i]), mem)
	ans := ((skip+take1)%MOD + take2) % MOD
	mem[key] = ans
	return ans

}

func gcdFTN(a, b int) int {

	for b != 0 {
		a, b = b, a%b
	}
	return a
}
