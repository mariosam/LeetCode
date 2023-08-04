/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumCostToMakeArrayEqual
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumCostToMakeArrayEqual(t *testing.T) {
	tables := []struct {
		want int64
		nums []int
		cost []int
	}{
		{8, []int{1, 3, 5, 2}, []int{2, 3, 1, 14}},
		{0, []int{2, 2, 2, 2, 2}, []int{4, 2, 8, 1, 3}},
	}

	for _, table := range tables {
		got := minCost(table.nums, table.cost)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
