/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumNumberOfOperationsToMakeArrayXOREqualToK
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumNumberOfOperationsToMakeArrayXOREqualToK(t *testing.T) {
	tables := []struct {
		want int
		nums []int
		x    int
	}{
		{2, []int{2, 1, 3, 4}, 1},
		{0, []int{2, 0, 2, 0}, 0},
	}

	for _, table := range tables {
		got := minOperations(table.nums, table.x)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
