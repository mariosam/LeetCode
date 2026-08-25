/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestKthSmallestAmountWithSingleDenominationCombination
 */
package GO

import (
	"reflect"
	"testing"
)

func TestKthSmallestAmountWithSingleDenominationCombination(t *testing.T) {
	tables := []struct {
		want int64
		nums []int
		pos  int
	}{
		{9, []int{3, 6, 9}, 3},
		{12, []int{5, 2}, 7},
	}

	for _, table := range tables {
		got := findKthSmallest(table.nums, table.pos)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
