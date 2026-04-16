/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumDistanceToTheTargetElement
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumDistanceToTheTargetElement(t *testing.T) {
	tables := []struct {
		want   int
		nums   []int
		target int
		start  int
	}{
		{1, []int{1, 2, 3, 4, 5}, 5, 3},
		{0, []int{1}, 1, 0},
		{0, []int{1, 1, 1, 1, 1, 1, 1, 1, 1, 1}, 1, 0},
	}

	for _, table := range tables {
		got := getMinDistance(table.nums, table.target, table.start)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
