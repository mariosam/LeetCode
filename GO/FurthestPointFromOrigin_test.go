/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFurthestPointFromOrigin
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFurthestPointFromOrigin(t *testing.T) {
	tables := []struct {
		want int
		move string
	}{
		{3, "L_RL__R"},
		{5, "_R__LL_"},
		{7, "_______"},
	}

	for _, table := range tables {
		got := furthestDistanceFromOrigin(table.move)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
