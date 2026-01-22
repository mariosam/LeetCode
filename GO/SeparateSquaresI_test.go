/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSeparateSquaresI
 */
package GO

import (
	"math"
	"testing"
)

func TestSeparateSquaresI(t *testing.T) {
	tables := []struct {
		want float64
		nums [][]int
	}{
		{1.00000, [][]int{{0, 0, 1}, {2, 2, 1}}},
		{1.16667, [][]int{{0, 0, 2}, {1, 1, 1}}},
	}

	for _, table := range tables {
		got := separateSquares(table.nums)

		if !almostEqual(got, table.want, 0.00001) {
			t.Errorf("Waiting for this %f but the return was this: %f", table.want, got)
		}
	}
}

func almostEqual(a, b, eps float64) bool {
	return math.Abs(a-b) < eps
}
