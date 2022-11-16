/**
 * @version GO 1.19.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestRemoveDuplicatesFromSortedArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestRemoveDuplicatesFromSortedArray(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{2, []int{1, 1, 2}},
		{5, []int{0, 0, 1, 1, 1, 2, 2, 3, 3, 4}},
	}

	for _, table := range tables {
		got := removeDuplicates(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
