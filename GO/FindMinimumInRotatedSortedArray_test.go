/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindMinimumInRotatedSortedArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindMinimumInRotatedSortedArray(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{1, []int{3, 4, 5, 1, 2}},
		{0, []int{4, 5, 6, 7, 0, 1, 2}},
		{11, []int{11, 13, 15, 17}}}

	for _, table := range tables {
		got := findMin(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
