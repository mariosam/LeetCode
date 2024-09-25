/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestKthSmallestInLexicographicalOrder
 */
package GO

import (
	"reflect"
	"testing"
)

func TestKthSmallestInLexicographicalOrder(t *testing.T) {
	tables := []struct {
		want int
		nums int
		pos  int
	}{
		{10, 13, 2},
		{1, 1, 1},
	}

	for _, table := range tables {
		got := findKthNumber(table.nums, table.pos)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
