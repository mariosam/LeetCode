/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumErasureValue
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumErasureValue(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{17, []int{4, 2, 4, 5, 6}},
		{8, []int{5, 2, 1, 2, 5, 2, 1, 2, 5}},
	}

	for _, table := range tables {
		got := maximumUniqueSubarray(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
