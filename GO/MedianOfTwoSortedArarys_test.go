/**
 * @version GO 1.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMedianOfTwoSortedArrays
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMedianOfTwoSortedArrays(t *testing.T) {
	tables := []struct {
		want  float64
		nums1 []int
		nums2 []int
	}{
		{2.00000, []int{1, 3}, []int{2}},
		{2.50000, []int{1, 2}, []int{3, 4}},
	}

	for _, table := range tables {
		got := findMedianSortedArrays(table.nums1, table.nums2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %f but the return was this: %f", table.want, got)
		}
	}
}
