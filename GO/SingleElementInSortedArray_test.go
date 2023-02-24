/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSingleElementInSortedArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSingleElementInSortedArray(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{2, []int{1, 1, 2, 3, 3, 4, 4, 8, 8}},
		{10, []int{3, 3, 7, 7, 10, 11, 11}},
		{1, []int{1, 2, 2, 3, 3}},
		{2, []int{1, 1, 2}},
	}

	for _, table := range tables {
		got := singleNonDuplicate(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
