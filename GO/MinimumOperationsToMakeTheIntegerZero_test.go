/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumOperationsToMakeTheIntegerZero
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumOperationsToMakeTheIntegerZero(t *testing.T) {
	tables := []struct {
		want int
		nums int
		x    int
	}{
		{3, 3, -2},
		{-1, 5, 7},
	}

	for _, table := range tables {
		got := makeTheIntegerZero(table.nums, table.x)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
