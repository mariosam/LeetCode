/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumMatrixSum
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumMatrixSum(t *testing.T) {
	tables := []struct {
		want  int64
		nums2 [][]int
	}{
		{4, [][]int{{1, -1}, {-1, 1}}},
		{16, [][]int{{1, 2, 3}, {-1, -2, -3}, {1, 2, 3}}},
	}

	for _, table := range tables {
		got := maxMatrixSum(table.nums2)
		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
