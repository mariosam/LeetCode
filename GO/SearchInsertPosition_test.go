/**
 * @version GO 1.19.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSearchInsertPosition
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSearchInsertPosition(t *testing.T) {
	tables := []struct {
		want   int
		nums   []int
		target int
	}{
		{2, []int{1, 3, 5, 6}, 5},
		{1, []int{1, 3, 5, 6}, 2},
		{4, []int{1, 3, 5, 6}, 7},
	}

	for _, table := range tables {
		got := searchInsert(table.nums, table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
