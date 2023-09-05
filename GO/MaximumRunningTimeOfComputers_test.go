/**
 * @version GO 1.21.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumRunningTimeOfComputers
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumRunningTimeOfComputers(t *testing.T) {
	tables := []struct {
		want  int64
		nums1 int
		nums2 []int
	}{
		{4, 2, []int{3, 3, 3}},
		{2, 2, []int{1, 1, 1, 1}},
	}

	for _, table := range tables {
		got := maxRunTime(table.nums1, table.nums2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
