/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestContinuousSubarrays
 */
package GO

import (
	"reflect"
	"testing"
)

func TestContinuousSubarrays(t *testing.T) {
	tables := []struct {
		want int64
		nums []int
	}{
		{8, []int{5, 4, 2, 4}},
		{6, []int{1, 2, 3}},
	}

	for _, table := range tables {
		got := continuousSubarrays(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
