/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumOperationsToExceedThresholdValueII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumOperationsToExceedThresholdValueII(t *testing.T) {
	tables := []struct {
		want int
		nums []int
		x    int
	}{
		{2, []int{2, 11, 10, 1, 3}, 10},
		{4, []int{1, 1, 2, 4, 9}, 20},
	}

	for _, table := range tables {
		got := minOperationsII(table.nums, table.x)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
