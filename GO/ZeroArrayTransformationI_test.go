/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestZeroArrayTransformationI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestZeroArrayTransformationI(t *testing.T) {
	tables := []struct {
		want    bool
		nums    []int
		queries [][]int
	}{
		{true, []int{1, 0, 1}, [][]int{{0, 2}}},
		{false, []int{4, 3, 2, 1}, [][]int{{1, 3}, {0, 2}}},
	}

	for _, table := range tables {
		got := isZeroArray(table.nums, table.queries)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
