/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSetIntersectionSizeAtLeastTwo
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSetIntersectionSizeAtLeastTwo(t *testing.T) {
	tables := []struct {
		want int
		nums [][]int
	}{
		{5, [][]int{{1, 3}, {3, 7}, {8, 9}}},
		{3, [][]int{{1, 3}, {1, 4}, {2, 5}, {3, 5}}},
		{5, [][]int{{1, 2}, {2, 3}, {2, 4}, {4, 5}}},
	}

	for _, table := range tables {
		got := intersectionSizeTwo(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
