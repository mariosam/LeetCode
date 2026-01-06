/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNumberOfWaysToPaintNx3Grid
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNumberOfWaysToPaintNx3Grid(t *testing.T) {
	tables := []struct {
		want int
		nums int
	}{
		{12, 1},
		{30228214, 5000},
	}

	for _, table := range tables {
		got := numOfWays(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
