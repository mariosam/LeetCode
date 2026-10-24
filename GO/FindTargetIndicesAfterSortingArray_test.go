/**
 * @version GO 1.27.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindTargetIndicesAfterSortingArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindTargetIndicesAfterSortingArray(t *testing.T) {
	tables := []struct {
		want   []int
		nums   []int
		target int
	}{
		{[]int{1, 2}, []int{1, 2, 5, 2, 3}, 2},
		{[]int{3}, []int{1, 2, 5, 2, 3}, 3},
		{[]int{4}, []int{1, 2, 5, 2, 3}, 5},
	}

	for _, table := range tables {
		got := targetIndices(table.nums, table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %b but the return was this: %b", table.want, got)
		}
	}
}
