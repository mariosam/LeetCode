/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountWaysToBuildGoodStrings
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountWaysToBuildGoodStrings(t *testing.T) {
	tables := []struct {
		want int
		low  int
		high int
		zero int
		one  int
	}{
		{8, 3, 3, 1, 1},
		{5, 2, 3, 1, 2},
	}

	for _, table := range tables {
		got := countGoodStrings(table.low, table.high, table.zero, table.one)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
