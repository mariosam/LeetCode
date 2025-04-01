/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumIndexOfValidSplit
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumIndexOfValidSplit(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{2, []int{1, 2, 2, 2}},
		{4, []int{2, 1, 3, 1, 1, 1, 7, 1, 2, 1}},
		{-1, []int{3, 3, 3, 3, 7, 2, 2}},
	}

	for _, table := range tables {
		got := minimumIndex(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
