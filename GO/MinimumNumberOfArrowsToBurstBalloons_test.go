/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumNumberOfArrowsToBurstBalloons
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumNumberOfArrowsToBurstBalloons(t *testing.T) {
	tables := []struct {
		want int
		nums [][]int
	}{
		{2, [][]int{{10, 16}, {2, 8}, {1, 6}, {7, 12}}},
		{4, [][]int{{1, 2}, {3, 4}, {5, 6}, {7, 8}}},
		{2, [][]int{{1, 2}, {2, 3}, {3, 4}, {4, 5}}},
	}

	for _, table := range tables {
		got := findMinArrowShots(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
