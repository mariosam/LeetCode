/**
 * @version GO 1.19.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestTwoSum
 */
package GO

import (
	"reflect"
	"testing"
)

func TestTwoSum(t *testing.T) {
	tables := []struct {
		want   []int
		target int
		nums   []int
	}{
		{[]int{0, 1}, 9, []int{2, 7, 11, 15}},
		{[]int{1, 2}, 6, []int{3, 2, 4}},
		{[]int{0, 1}, 6, []int{3, 3}},
	}

	for _, table := range tables {
		got := twoSum(table.nums, table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
