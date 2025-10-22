/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumNumberOfDistinctElementsAfterOperations
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMMaximumNumberOfDistinctElementsAfterOperations(t *testing.T) {
	tables := []struct {
		want  int
		nums2 []int
		nums1 int
	}{
		{6, []int{1, 2, 2, 3, 3, 4}, 2},
		{3, []int{4, 4, 4, 4}, 1},
	}

	for _, table := range tables {
		got := maxDistinctElements(table.nums2, table.nums1)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
