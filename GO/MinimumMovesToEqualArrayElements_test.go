/**
 * @version GO 1.27.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumMovesToEqualArrayElements
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumMovesToEqualArrayElements(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{3, []int{1, 2, 3}},
		{0, []int{1, 1, 1}},
	}

	for _, table := range tables {
		got := minMoves(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
