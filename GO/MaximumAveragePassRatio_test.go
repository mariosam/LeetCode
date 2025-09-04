/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumAveragePassRatio
 */
package GO

import (
	"math"
	"testing"
)

func TestMaximumAveragePassRatio(t *testing.T) {
	tables := []struct {
		want  float64
		num   [][]int
		extra int
	}{
		{0.78333, [][]int{{1, 2}, {3, 5}, {2, 2}}, 2},
		{0.53485, [][]int{{2, 4}, {3, 9}, {4, 5}, {2, 10}}, 4},
	}

	for _, table := range tables {
		got := maxAverageRatio(table.num, table.extra)

		if math.Abs(got-table.want) > 1e-5 {
			t.Errorf("Esperado %.5f mas retornou %.5f", table.want, got)
		}
	}
}
