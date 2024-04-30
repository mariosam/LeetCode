/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumFallingPathSumII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumFallingPathSumII(t *testing.T) {
	tables := []struct {
		want int
		nums [][]int
	}{
		{13, [][]int{{1, 2, 3}, {4, 5, 6}, {7, 8, 9}}},
		{7, [][]int{{7}}},
	}

	for _, table := range tables {
		got := minFallingPathSum(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
