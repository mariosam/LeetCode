/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumDistanceInArrays
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumDistanceInArrays(t *testing.T) {
	tables := []struct {
		want int
		nums [][]int
	}{
		{4, [][]int{{1, 2, 3}, {4, 5}, {1, 2, 3}}},
		{0, [][]int{{1}, {1}}},
	}

	for _, table := range tables {
		got := maxDistance(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
