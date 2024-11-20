/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestShortestSubarrayWithSumAtLeastK
 */
package GO

import (
	"reflect"
	"testing"
)

func TestShortestSubarrayWithSumAtLeastK(t *testing.T) {
	tables := []struct {
		want int
		nums []int
		k    int
	}{
		{1, []int{1}, 1},
		{-1, []int{1, 2}, 4},
		{3, []int{2, -1, 2}, 3},
	}

	for _, table := range tables {
		got := shortestSubarray(table.nums, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
