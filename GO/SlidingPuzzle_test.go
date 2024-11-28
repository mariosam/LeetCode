/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSlidingPuzzle
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSlidingPuzzle(t *testing.T) {
	tables := []struct {
		want int
		val  [][]int
	}{
		{1, [][]int{{1, 2, 3}, {4, 0, 5}}},
		{-1, [][]int{{1, 2, 3}, {5, 4, 0}}},
		{5, [][]int{{4, 1, 2}, {5, 0, 3}}},
	}

	for _, table := range tables {
		got := slidingPuzzle(table.val)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
