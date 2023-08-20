/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestKnightProbabilityInChessboard
 */
package GO

import (
	"reflect"
	"testing"
)

func TestKnightProbabilityInChessboard(t *testing.T) {
	tables := []struct {
		want float64
		n    int
		k    int
		row  int
		col  int
	}{
		{0.06250, 3, 2, 0, 0},
		{1.00000, 1, 0, 0, 0},
	}

	for _, table := range tables {
		got := knightProbability(table.n, table.k, table.row, table.col)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %f but the return was this: %f", table.want, got)
		}
	}
}
