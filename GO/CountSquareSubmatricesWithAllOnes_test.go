/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountSquareSubmatricesWithAllOnes
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountSquareSubmatricesWithAllOnes(t *testing.T) {
	tables := []struct {
		want int
		nums [][]int
	}{
		{15, [][]int{{0,1,1,1},{1,1,1,1}, {0,1,1,1}}},
		{7, [][]int{{1,0,1},{1,1,0},{1,1,0}}},
	}

	for _, table := range tables {
		got := countSquares(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
