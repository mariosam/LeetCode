/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountOfInterestingSubarrays
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountOfInterestingSubarrays(t *testing.T) {
	tables := []struct {
		want   int64
		nums   []int
		module int
		k      int
	}{
		{3, []int{3, 2, 4}, 2, 1},
		{2, []int{3, 1, 9, 6}, 3, 0},
	}

	for _, table := range tables {
		got := countInterestingSubarrays(table.nums, table.module, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
