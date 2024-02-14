/**
 * @version GO 1.21.6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCherryPickupII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCherryPickupII(t *testing.T) {
	tables := []struct {
		want  int
		steps [][]int
	}{
		{24, [][]int{{3, 1, 1}, {2, 5, 1}, {1, 5, 5}, {2, 1, 1}}},
		{28, [][]int{{1, 0, 0, 0, 0, 0, 1}, {2, 0, 0, 0, 0, 3, 0}, {2, 0, 9, 0, 0, 0, 0}, {0, 3, 0, 5, 4, 0, 0}, {1, 0, 2, 3, 0, 0, 6}}},
	}

	for _, table := range tables {
		got := cherryPickup(table.steps)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
