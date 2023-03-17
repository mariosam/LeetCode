/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestKthMissingPositiveNumber
 */
package GO

import (
	"reflect"
	"testing"
)

func TestKthMissingPositiveNumber(t *testing.T) {
	tables := []struct {
		want int
		nums []int
		pos  int
	}{
		{9, []int{2, 3, 4, 7, 11}, 5},
		{6, []int{1, 2, 3, 4}, 2},
	}

	for _, table := range tables {
		got := findKthPositive(table.nums, table.pos)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
