/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumTimeToCompleteTrips
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumTimeToCompleteTrips(t *testing.T) {
	tables := []struct {
		want  int64
		nums  []int
		trips int
	}{
		{3, []int{1, 2, 3}, 5},
		{2, []int{2}, 1},
	}

	for _, table := range tables {
		got := minimumTime(table.nums, table.trips)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
