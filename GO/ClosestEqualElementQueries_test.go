/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestClosestEqualElementQueries
 */
package GO

import (
	"reflect"
	"testing"
)

func TestClosestEqualElementQueries(t *testing.T) {
	tables := []struct {
		want    []int
		nums    []int
		queries []int
	}{
		{[]int{2, -1, 3}, []int{1, 3, 1, 4, 1, 3, 2}, []int{0, 3, 5}},
		{[]int{-1, -1, -1, -1}, []int{1, 2, 3, 4}, []int{0, 1, 2, 3}},
	}

	for _, table := range tables {
		got := solveQueries(table.nums, table.queries)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
