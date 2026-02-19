/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func reverseBits(n int) int {
	var x uint32 = uint32(n)
	var res uint32 = 0

	for i := 0; i < 32; i++ {
		res = (x & 1) | (res << 1)
		x >>= 1
	}
	return int(res)
}
