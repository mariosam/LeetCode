/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestBinarySearch
 */
package GO

import (
	"reflect"
	"testing"
)

func TestBinarySearch(t *testing.T) {
	tables := []struct {
		want   int
		nums   []int
		target int
	}{
		{4, []int{-1, 0, 3, 5, 9, 12}, 9},
		{-1, []int{-1, 0, 3, 5, 9, 12}, 2},
		{0, []int{5}, 5},
	}

	for _, table := range tables {
		got := search(table.nums, table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
