/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindThePivotInteger
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindThePivotInteger(t *testing.T) {
	tables := []struct {
		want int
		n    int
	}{
		{6, 8},
		{1, 1},
		{-1, 4},
	}

	for _, table := range tables {
		got := pivotInteger(table.n)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
