/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMonotonicArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMonotonicArray(t *testing.T) {
	tables := []struct {
		want bool
		nums []int
	}{
		{true, []int{1, 2, 2, 3}},
		{true, []int{6, 5, 4, 4}},
		{false, []int{1, 3, 2}},
	}

	for _, table := range tables {
		got := isMonotonic(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
