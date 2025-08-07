/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumFruitsHarvestedAfterAtMostKSteps
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumFruitsHarvestedAfterAtMostKSteps(t *testing.T) {
	tables := []struct {
		want     int
		nums     [][]int
		startPos int
		k        int
	}{
		{9, [][]int{{2, 8}, {6, 3}, {8, 6}}, 5, 4},
		{14, [][]int{{0, 9}, {4, 1}, {5, 7}, {6, 2}, {7, 4}, {10, 9}}, 5, 4},
		{0, [][]int{{0, 3}, {6, 4}, {8, 5}}, 3, 2},
	}

	for _, table := range tables {
		got := maxTotalFruits(table.nums, table.startPos, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
