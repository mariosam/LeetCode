/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestTrappingRainWater
 */
package GO

import (
	"reflect"
	"testing"
)

func TestTrappingRainWater(t *testing.T) {
	tables := []struct {
		want   int
		height []int
	}{
		{6, []int{0, 1, 0, 2, 1, 0, 1, 3, 2, 1, 2, 1}},
		{9, []int{4, 2, 0, 3, 2, 5}},
	}

	for _, table := range tables {
		got := trap(table.height)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
