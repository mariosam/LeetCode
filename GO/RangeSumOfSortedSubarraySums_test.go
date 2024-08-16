/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestRangeSumOfSortedSubarraySums
 */
package GO

import (
	"reflect"
	"testing"
)

func TestRangeSumOfSortedSubarraySums(t *testing.T) {
	tables := []struct {
		want  int
		nums  []int
		n     int
		left  int
		right int
	}{
		{13, []int{1, 2, 3, 4}, 4, 1, 5},
		{6, []int{1, 2, 3, 4}, 4, 3, 4},
		{50, []int{1, 2, 3, 4}, 4, 1, 10},
	}

	for _, table := range tables {
		got := rangeSum(table.nums, table.n, table.left, table.right)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
