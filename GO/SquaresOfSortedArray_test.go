/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSquaresOfSortedArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSquaresOfSortedArray(t *testing.T) {
	tables := []struct {
		want []int
		nums []int
	}{
		{[]int{0, 1, 9, 16, 100}, []int{-4, -1, 0, 3, 10}},
		{[]int{4, 9, 9, 49, 121}, []int{-7, -3, 2, 3, 11}},
	}

	for _, table := range tables {
		got := sortedSquares(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
