/**
 * @version GO 1.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMergeSortedArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestAddToArrayFormOfInteger(t *testing.T) {
	tables := []struct {
		want  []int
		nums1 []int
		m     int
	}{
		{[]int{1, 2, 3, 4}, []int{1, 2, 0, 0}, 34},
		{[]int{4, 5, 5}, []int{2, 7, 4}, 181},
		{[]int{1, 0, 2, 1}, []int{2, 1, 5}, 806},
		{[]int{1, 2, 6, 3, 0, 7, 1, 7, 1, 9, 7, 5, 6, 6, 4, 4, 0, 5, 7, 9}, []int{1, 2, 6, 3, 0, 7, 1, 7, 1, 9, 7, 5, 6, 6, 4, 4, 0, 0, 6, 3}, 516},
		{[]int{3, 8, 0, 3, 0, 2, 7, 0, 7, 6, 4, 9, 9, 1, 7, 6, 6, 8, 3, 4}, []int{3, 8, 0, 3, 0, 2, 7, 0, 7, 6, 4, 9, 9, 1, 7, 6, 6, 1, 6, 4}, 670},
		{[]int{4, 2, 0, 5, 3, 5, 7, 4, 7, 3, 4, 1, 8, 5, 5, 4, 8, 0, 8, 5, 8, 6, 2, 0, 0, 3, 7, 4, 7, 0, 8, 8, 7, 0, 5, 9, 7, 6, 3, 7, 9, 5, 4, 3, 6, 6, 3, 4, 0, 6}, []int{4, 2, 0, 5, 3, 5, 7, 4, 7, 3, 4, 1, 8, 5, 5, 4, 8, 0, 8, 5, 8, 6, 2, 0, 0, 3, 7, 4, 7, 0, 8, 8, 7, 0, 5, 9, 7, 6, 3, 7, 9, 5, 4, 3, 6, 5, 9, 5, 9, 1}, 3815},
	}

	for _, table := range tables {
		got := addToArrayForm(table.nums1, table.m)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
