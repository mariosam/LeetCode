/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumPathSum
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumPathSum(t *testing.T) {
	tables := []struct {
		want int
		nums [][]int
	}{
		{7, [][]int{{1, 3, 1}, {1, 5, 1}, {4, 2, 1}}},
		{12, [][]int{{1, 2, 3}, {4, 5, 6}}},
	}

	for _, table := range tables {
		got := minPathSum(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
