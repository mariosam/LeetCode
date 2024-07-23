/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindValidMatrixGivenRowAndColumnSums
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindValidMatrixGivenRowAndColumnSums(t *testing.T) {
	tables := []struct {
		want   [][]int
		rowSum []int
		colSum []int
	}{
		{[][]int{{1, 2}, {0, 5}}, []int{3, 8}, []int{1, 7}},
		{[][]int{{5, 0, 0}, {3, 4, 0}, {0, 2, 8}}, []int{5, 7, 10}, []int{8, 6, 8}},
	}

	for _, table := range tables {
		got := restoreMatrix(table.rowSum, table.colSum)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
