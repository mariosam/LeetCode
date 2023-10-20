/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestUniquePathsII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestUniquePathsII(t *testing.T) {
	tables := []struct {
		want int
		grid [][]int
	}{
		{2, [][]int{{0, 0, 0}, {0, 1, 0}, {0, 0, 0}}},
		{1, [][]int{{0, 1}, {0, 0}}},
	}

	for _, table := range tables {
		got := uniquePathsWithObstacles(table.grid)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
