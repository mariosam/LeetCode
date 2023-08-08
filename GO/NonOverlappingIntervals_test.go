/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNonOverlappingIntervals
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNonOverlappingIntervals(t *testing.T) {
	tables := []struct {
		want int
		nums [][]int
	}{
		{1, [][]int{{1, 2}, {2, 3}, {3, 4}, {1, 3}}},
		{2, [][]int{{1, 2}, {1, 2}, {1, 2}}},
		{0, [][]int{{1, 2}, {2, 3}}},
	}

	for _, table := range tables {
		got := eraseOverlapIntervals(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
