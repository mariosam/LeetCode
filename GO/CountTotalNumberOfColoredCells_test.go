/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountTotalNumberOfColoredCells
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountTotalNumberOfColoredCells(t *testing.T) {
	tables := []struct {
		want int64
		low  int
	}{
		{1, 1},
		{5, 2},
	}

	for _, table := range tables {
		got := coloredCells(table.low)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
