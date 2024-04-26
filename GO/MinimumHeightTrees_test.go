/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumHeightTrees
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumHeightTrees(t *testing.T) {
	tables := []struct {
		want  []int
		num   int
		edges [][]int
	}{
		{[]int{1}, 4, [][]int{{1, 0}, {1, 2}, {1, 3}}},
		{[]int{3, 4}, 6, [][]int{{3, 0}, {3, 1}, {3, 2}, {3, 4}, {5, 4}}},
	}

	for _, table := range tables {
		got := findMinHeightTrees(table.num, table.edges)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
