/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestRemoveCoveredIntervals
 */
package GO

import (
	"reflect"
	"testing"
)

func TestRemoveCoveredIntervals(t *testing.T) {
	tables := []struct {
		want int
		word [][]int
	}{
		{2, [][]int{{1, 4}, {3, 6}, {2, 8}}},
		{1, [][]int{{1, 4}, {2, 3}}},
	}

	for _, table := range tables {
		got := removeCoveredIntervals(table.word)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
