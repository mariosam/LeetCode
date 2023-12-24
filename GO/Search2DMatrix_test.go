/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSearch2DMatrix
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSearch2DMatrix(t *testing.T) {
	tables := []struct {
		want   bool
		nums   [][]int
		target int
	}{
		{true, [][]int{{1, 3, 5, 7}, {10, 11, 16, 20}, {23, 30, 34, 60}}, 3},
		{false, [][]int{{1, 3, 5, 7}, {10, 11, 16, 20}, {23, 30, 34, 60}}, 13},
	}

	for _, table := range tables {
		got := searchMatrix(table.nums, table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
