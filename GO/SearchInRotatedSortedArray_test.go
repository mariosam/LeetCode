/**
 * @version GO 1.21.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSearchInRotatedSortedArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSearchInRotatedSortedArray(t *testing.T) {
	tables := []struct {
		want   int
		nums   []int
		target int
	}{
		{4, []int{4, 5, 6, 7, 0, 1, 2}, 0},
		{-1, []int{4, 5, 6, 7, 0, 1, 2}, 3},
		{-1, []int{1}, 0},
	}

	for _, table := range tables {
		got := search(table.nums, table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
