/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountSubarraysWithFixedBounds
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountSubarraysWithFixedBounds(t *testing.T) {
	tables := []struct {
		want int
		nums []int
		minK int
		maxK int
	}{
		{2, []int{1, 3, 5, 2, 7, 5}, 1, 5},
		{10, []int{1, 1, 1, 1}, 1, 1},
	}

	for _, table := range tables {
		got := countSubarrays(table.nums, table.minK, table.maxK)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
