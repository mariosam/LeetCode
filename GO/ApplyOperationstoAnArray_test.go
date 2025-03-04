/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestApplyOperationstoAnArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestApplyOperationstoAnArray(t *testing.T) {
	tables := []struct {
		want  []int
		nums1 []int
	}{
		{[]int{1, 4, 2, 0, 0, 0}, []int{1, 2, 2, 1, 1, 0}},
		{[]int{1, 0}, []int{0, 1}},
	}

	for _, table := range tables {
		got := applyOperations(table.nums1)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
