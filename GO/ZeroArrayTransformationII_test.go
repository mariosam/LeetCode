/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestZeroArrayTransformationII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestZeroArrayTransformationII(t *testing.T) {
	tables := []struct {
		want    int
		nums    []int
		queries [][]int
	}{
		{2, []int{2, 0, 2}, [][]int{{0, 2, 1}, {0, 2, 1}, {1, 1, 3}}},
		{-1, []int{4, 3, 2, 1}, [][]int{{1, 3, 2}, {0, 2, 1}}},
	}

	for _, table := range tables {
		got := minZeroArray(table.nums, table.queries)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
