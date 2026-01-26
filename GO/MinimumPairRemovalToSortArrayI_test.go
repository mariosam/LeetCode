/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TesMinimumPairRemovalToSortArrayI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumPairRemovalToSortArrayI(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{2, []int{5, 2, 3, 1}},
		{0, []int{1, 2, 2}},
	}

	for _, table := range tables {
		got := minimumPairRemoval(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
