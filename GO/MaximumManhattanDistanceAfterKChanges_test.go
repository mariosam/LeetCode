/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumManhattanDistanceAfterKChanges
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumManhattanDistanceAfterKChanges(t *testing.T) {
	tables := []struct {
		want int
		s    string
		k    int
	}{
		{3, "NWSE", 1},
		{6, "NSWWEW", 3},
	}

	for _, table := range tables {
		got := maxDistanceK(table.s, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
