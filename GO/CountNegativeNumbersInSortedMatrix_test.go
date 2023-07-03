/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountNegativeNumbersInSortedMatrix
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountNegativeNumbersInSortedMatrix(t *testing.T) {
	tables := []struct {
		want int
		nums [][]int
	}{
		{8, [][]int{{4, 3, 2, -1}, {3, 2, 1, -1}, {1, 1, -1, -2}, {-1, -1, -2, -3}}},
		{0, [][]int{{3, 2}, {1, 0}}},
	}

	for _, table := range tables {
		got := countNegatives(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
