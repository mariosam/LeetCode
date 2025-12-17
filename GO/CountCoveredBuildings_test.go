/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountCoveredBuildings
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountCoveredBuildings(t *testing.T) {
	tables := []struct {
		want int
		a    int
		nums [][]int
	}{
		{1, 3, [][]int{{1, 2}, {2, 2}, {3, 2}, {2, 1}, {2, 3}}},
		{0, 3, [][]int{{1, 1}, {1, 2}, {2, 1}, {2, 2}}},
		{1, 5, [][]int{{1, 3}, {3, 2}, {3, 3}, {3, 5}, {5, 3}}},
	}

	for _, table := range tables {
		got := countCoveredBuildings(table.a, table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
