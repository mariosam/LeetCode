/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestDivideIntervalsIntoMinimumNumberOfGroups
 */
package GO

import (
	"reflect"
	"testing"
)

func TestDivideIntervalsIntoMinimumNumberOfGroups(t *testing.T) {
	tables := []struct {
		want  int
		word1 [][]int
	}{
		{3, [][]int{{5, 10}, {6, 8}, {1, 5}, {2, 3}, {1, 10}}},
		{1, [][]int{{1, 3}, {5, 6}, {8, 10}, {11, 13}}},
	}

	for _, table := range tables {
		got := minGroups(table.word1)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
