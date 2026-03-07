/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSpecialPositionsInBinaryMatrix
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSpecialPositionsInBinaryMatrix(t *testing.T) {
	tables := []struct {
		want int
		nums [][]int
	}{
		{1, [][]int{{1, 0, 0}, {0, 0, 1}, {1, 0, 0}}},
		{3, [][]int{{1, 0, 0}, {0, 1, 0}, {0, 0, 1}}},
	}

	for _, table := range tables {
		got := numSpecial(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
