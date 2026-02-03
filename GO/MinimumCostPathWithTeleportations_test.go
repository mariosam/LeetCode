/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumCostPathWithTeleportations
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumCostPathWithTeleportations(t *testing.T) {
	tables := []struct {
		want int
		grid [][]int
		k    int
	}{
		{7, [][]int{{1, 3, 3}, {2, 5, 4}, {4, 3, 5}}, 2},
		{9, [][]int{{1, 2}, {2, 3}, {3, 4}}, 1},
	}

	for _, table := range tables {
		got := minCostTele(table.grid, table.k)
		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
