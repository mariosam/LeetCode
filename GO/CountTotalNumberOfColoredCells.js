/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package GO

func coloredCells(n int) int64 {
	n64 := int64(n)
	return n64*n64 + (n64-1)*(n64-1)
}
