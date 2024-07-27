/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSortTheJumbledNumbers
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSortTheJumbledNumbers(t *testing.T) {
	tables := []struct {
		want    []int
		mapping []int
		nums    []int
	}{
		{[]int{338, 38, 991}, []int{8, 9, 4, 0, 2, 1, 3, 5, 7, 6}, []int{991, 338, 38}},
		{[]int{123, 456, 789}, []int{0, 1, 2, 3, 4, 5, 6, 7, 8, 9}, []int{789, 456, 123}},
	}

	for _, table := range tables {
		got := sortJumbled(table.mapping, table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
