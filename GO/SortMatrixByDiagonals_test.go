/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSortMatrixByDiagonals
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSortMatrixByDiagonals(t *testing.T) {
	tables := []struct {
		want [][]int
		val  [][]int
	}{
		{[][]int{{8, 2, 3}, {9, 6, 7}, {4, 5, 1}}, [][]int{{1, 7, 3}, {9, 8, 2}, {4, 5, 6}}},
		{[][]int{{2, 1}, {1, 0}}, [][]int{{0, 1}, {1, 2}}},
		{[][]int{{1}}, [][]int{{1}}},
	}

	for _, table := range tables {
		got := sortMatrix(table.val)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
