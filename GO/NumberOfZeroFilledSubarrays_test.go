/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNumberOfZeroFilledSubarrays
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNumberOfZeroFilledSubarrays(t *testing.T) {
	tables := []struct {
		want int64
		nums []int
	}{
		{6, []int{1, 3, 0, 0, 2, 0, 0, 4}},
		{9, []int{0, 0, 0, 2, 0, 0}},
	}

	for _, table := range tables {
		got := zeroFilledSubarray(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
