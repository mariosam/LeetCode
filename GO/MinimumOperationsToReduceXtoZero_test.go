/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumOperationsToReduceXtoZero
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumOperationsToReduceXtoZero(t *testing.T) {
	tables := []struct {
		want int
		nums []int
		x    int
	}{
		{2, []int{1, 1, 4, 2, 3}, 5},
		{-1, []int{5, 6, 7, 8, 9}, 4},
		{5, []int{3, 2, 20, 1, 1, 3}, 10},
	}

	for _, table := range tables {
		got := minOperations(table.nums, table.x)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
