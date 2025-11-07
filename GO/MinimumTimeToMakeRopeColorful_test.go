/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumTimeToMakeRopeColorful
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumTimeToMakeRopeColorful(t *testing.T) {
	tables := []struct {
		want  int
		trips string
		nums  []int
	}{
		{3, "abaac", []int{1, 2, 3, 4, 5}},
		{0, "abc", []int{1, 2, 3}},
		{2, "aabaa", []int{1, 2, 3, 4, 1}},
	}

	for _, table := range tables {
		got := minCost2(table.trips, table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
