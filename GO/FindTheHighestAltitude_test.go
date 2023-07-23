/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindTheHighestAltitude
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindTheHighestAltitude(t *testing.T) {
	tables := []struct {
		want int
		gain []int
	}{
		{1, []int{-5, 1, 5, 0, -7}},
		{0, []int{-4, -3, -2, -1, 4, 3, 2}},
	}

	for _, table := range tables {
		got := largestAltitude(table.gain)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
