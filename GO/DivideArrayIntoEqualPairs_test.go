/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestDivideArrayIntoEqualPairs
 */
package GO

import (
	"reflect"
	"testing"
)

func TestDivideArrayIntoEqualPairs(t *testing.T) {
	tables := []struct {
		want bool
		nums []int
	}{
		{true, []int{3, 2, 3, 2, 2, 2}},
		{false, []int{1, 2, 3, 4}},
	}

	for _, table := range tables {
		got := divideArray(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
