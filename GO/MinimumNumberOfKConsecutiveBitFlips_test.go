/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumNumberOfKConsecutiveBitFlips
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumNumberOfKConsecutiveBitFlips(t *testing.T) {
	tables := []struct {
		want int
		nums []int
		num  int
	}{
		{2, []int{0, 1, 0}, 1},
		{-1, []int{1, 1, 0}, 2},
		{3, []int{0, 0, 0, 1, 0, 1, 1, 0}, 3},
	}

	for _, table := range tables {
		got := minKBitFlips(table.nums, table.num)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
