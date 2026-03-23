/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumAbsoluteDifferenceInSlidingSubmatrix
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumAbsoluteDifferenceInSlidingSubmatrixt *testing.T) {
	tables := []struct {
		want [][]int
		nums [][]int
		k    int
	}{
		{[][]int{{2}}, [][]int{{1, 8}, {3, -2}}, 2},
		{[][]int{{0, 0}}, [][]int{{3, -1}}, 1},
		{[][]int{{1, 2}}, [][]int{{1, -2, 3}, {2, 3, 5}}, 2},
	}

	for _, table := range tables {
		got := minAbsDiff(table.nums, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
