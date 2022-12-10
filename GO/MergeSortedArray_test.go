/**
 * @version GO 1.19.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMergeSortedArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMergeSortedArray(t *testing.T) {
	tables := []struct {
		want  []int
		nums1 []int
		m     int
		nums2 []int
		n     int
	}{
		{[]int{1, 2, 2, 3, 5, 6}, []int{1, 2, 3, 0, 0, 0}, 3, []int{2, 5, 6}, 3},
		{[]int{1}, []int{1}, 1, []int{}, 0},
		{[]int{1}, []int{}, 0, []int{1}, 1},
		{[]int{1, 2, 3, 4, 5, 6}, []int{4, 0, 0, 0, 0, 0}, 1, []int{1, 2, 3, 5, 6}, 5},
		{[]int{1, 2, 3, 4, 5, 6}, []int{1, 2, 4, 5, 6, 0}, 5, []int{3}, 1},
	}

	for _, table := range tables {
		got := merge(table.nums1, table.m, table.nums2, table.n)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
