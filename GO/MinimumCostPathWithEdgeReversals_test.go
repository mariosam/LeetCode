/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumCostPathWithEdgeReversals
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumCostPathWithEdgeReversals(t *testing.T) {
	tables := []struct {
		want   int
		source int
		cost   [][]int
	}{
		{5, 4, [][]int{{0, 1, 3}, {3, 1, 1}, {2, 3, 4}, {0, 2, 2}}},
		{3, 4, [][]int{{0, 2, 1}, {2, 1, 1}, {1, 3, 1}, {2, 3, 3}}},
	}

	for _, table := range tables {
		got := minCostEdge(table.source, table.cost)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
