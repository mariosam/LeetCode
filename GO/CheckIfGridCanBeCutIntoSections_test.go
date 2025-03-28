/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCheckIfGridCanBeCutIntoSections
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCheckIfGridCanBeCutIntoSections(t *testing.T) {
	tables := []struct {
		want   bool
		steps  int
		locked [][]int
	}{
		{true, 5, [][]int{{1, 0, 5, 2}, {0, 2, 2, 4}, {3, 2, 5, 3}, {0, 4, 4, 5}}},
		{true, 4, [][]int{{0, 0, 1, 1}, {2, 0, 3, 4}, {0, 2, 2, 3}, {3, 0, 4, 3}}},
		{false, 4, [][]int{{0, 2, 2, 4}, {1, 0, 3, 2}, {2, 2, 3, 4}, {3, 0, 4, 2}, {3, 2, 4, 4}}},
	}

	for _, table := range tables {
		got := checkValidCuts(table.steps, table.locked)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
