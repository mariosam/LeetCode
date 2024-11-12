/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumXORforEachQuery
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumXORforEachQuery(t *testing.T) {
	tables := []struct {
		want  []int
		nums1 []int
		nums2 int
	}{
		{[]int{0, 3, 2, 3}, []int{0, 1, 1, 3}, 2},
		{[]int{5, 2, 6, 5}, []int{2, 3, 4, 7}, 3},
		{[]int{4, 3, 6, 4, 6, 7}, []int{0, 1, 2, 2, 5, 7}, 3},
	}

	for _, table := range tables {
		got := getMaximumXor(table.nums1, table.nums2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
