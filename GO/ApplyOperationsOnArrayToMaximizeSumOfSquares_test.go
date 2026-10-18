/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestApplyOperationsOnArrayToMaximizeSumOfSquares
 */
package GO

import (
	"reflect"
	"testing"
)

func TestApplyOperationsOnArrayToMaximizeSumOfSquares(t *testing.T) {
	tables := []struct {
		want   int
		prices []int
		fee    int
	}{
		{261, []int{2, 6, 5, 8}, 2},
		{90, []int{4, 5, 4, 7}, 3},
	}

	for _, table := range tables {
		got := maxSum(table.prices, table.fee)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
