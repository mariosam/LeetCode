/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximizeAreaOfSquareHoleInGrid
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximizeAreaOfSquareHoleInGrid(t *testing.T) {
	tables := []struct {
		want  int
		n     int
		m     int
		hBars []int
		vBars []int
	}{
		{4, 2, 1, []int{2, 3}, []int{2}},
		{4, 1, 1, []int{2}, []int{2}},
		{4, 2, 3, []int{2, 3}, []int{2, 4}},
	}

	for _, table := range tables {
		got := maximizeSquareHoleArea(table.n, table.m, table.hBars, table.vBars)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
