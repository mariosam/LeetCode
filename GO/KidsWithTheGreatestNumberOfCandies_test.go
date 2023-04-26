/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestTwoSum
 */
package GO

import (
	"reflect"
	"testing"
)

func TestKidsWithTheGreatestNumberOfCandies(t *testing.T) {
	tables := []struct {
		want   []bool
		nums   []int
		target int
	}{
		{[]bool{true, true, true, false, true}, []int{2, 3, 5, 1, 3}, 3},
		{[]bool{true, false, false, false, false}, []int{4, 2, 1, 1, 2}, 1},
		{[]bool{true, false, true}, []int{12, 1, 12}, 10},
	}

	for _, table := range tables {
		got := kidsWithCandies(table.nums, table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
