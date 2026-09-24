/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCircleAndRectangleOverlapping
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCircleAndRectangleOverlapping(t *testing.T) {
	tables := []struct {
		want    bool
		radius  int
		xCenter int
		yCenter int
		x1      int
		y1      int
		x2      int
		y2      int
	}{
		{true, 1, 0, 0, 1, -1, 3, 1},
		{false, 1, 1, 1, 1, -3, 2, -1},
		{true, 1, 0, 0, -1, 0, 0, 1},
	}

	for _, table := range tables {
		got := checkOverlap(table.radius, table.xCenter, table.yCenter, table.x1, table.y1, table.x2, table.y2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
