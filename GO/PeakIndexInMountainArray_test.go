/**
 * @version GO 1.21
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestPeakIndexInMountainArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestPeakIndexInMountainArray(t *testing.T) {
	tables := []struct {
		want int
		num  []int
	}{
		{1, []int{0, 1, 0}},
		{1, []int{0, 2, 1, 0}},
		{1, []int{0, 10, 5, 2}},
	}

	for _, table := range tables {
		got := peakIndexInMountainArray(table.num)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
