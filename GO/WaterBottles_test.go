/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestWaterBottles
 */
package GO

import (
	"reflect"
	"testing"
)

func TestWaterBottles(t *testing.T) {
	tables := []struct {
		want    int
		nums    int
		queries int
	}{
		{13, 9, 3},
		{19, 15, 4},
	}

	for _, table := range tables {
		got := numWaterBottles(table.nums, table.queries)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
