/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountTheNumberOfFairPairs
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountTheNumberOfFairPairs(t *testing.T) {
	tables := []struct {
		want  int64
		nums  []int
		low   int
		upper int
	}{
		{6, []int{0, 1, 7, 4, 4, 5}, 3, 6},
		{1, []int{1, 7, 9, 2, 5}, 11, 11},
	}

	for _, table := range tables {
		got := countFairPairs(table.nums, table.low, table.upper)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
