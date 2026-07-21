/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSortedGCDPairQueries
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSortedGCDPairQueries(t *testing.T) {
	tables := []struct {
		want    []int
		nums    []int
		queries []int64
	}{
		{[]int{1, 2, 2}, []int{2, 3, 4}, []int64{0, 2, 2}},
		{[]int{4, 2, 1, 1}, []int{4, 4, 2, 1}, []int64{5, 3, 1, 0}},
		{[]int{2, 2}, []int{2, 2}, []int64{0, 0}},
	}

	for _, table := range tables {
		got := gcdValues(table.nums, table.queries)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
