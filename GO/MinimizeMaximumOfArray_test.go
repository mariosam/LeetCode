/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimizeMaximumOfArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimizeMaximumOfArray(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{5, []int{3, 7, 1, 6}},
		{10, []int{10, 1}},
	}

	for _, table := range tables {
		got := minimizeArrayValue(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
