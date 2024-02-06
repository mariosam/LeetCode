/**
 * @version GO 1.21.6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestPartitionArrayForMaximumSum
 */
package GO

import (
	"reflect"
	"testing"
)

func TestPartitionArrayForMaximumSum(t *testing.T) {
	tables := []struct {
		want int
		num  []int
		k    int
	}{
		{84, []int{1, 15, 7, 9, 2, 5, 10}, 3},
		{83, []int{1, 4, 1, 5, 7, 3, 6, 1, 9, 9, 3}, 4},
		{1, []int{1}, 1},
	}

	for _, table := range tables {
		got := maxSumAfterPartitioning(table.num, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
