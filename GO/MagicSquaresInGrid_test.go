/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMagicSquaresInGrid
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMagicSquaresInGrid(t *testing.T) {
	tables := []struct {
		want int
		nums [][]int
	}{
		{1, [][]int{{4, 3, 8, 4}, {9, 5, 1, 9}, {2, 7, 6, 2}}},
		{0, [][]int{{8}}},
	}

	for _, table := range tables {
		got := numMagicSquaresInside(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
