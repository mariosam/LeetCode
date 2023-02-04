/**
 * @version GO 1.19.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestContainsDuplicate
 */
package GO

import (
	"reflect"
	"testing"
)

func TestContainsDuplicate(t *testing.T) {
	tables := []struct {
		want bool
		nums []int
	}{
		{true, []int{1, 2, 3, 1}},
		{false, []int{1, 2, 3, 4}},
		{true, []int{1, 1, 1, 3, 3, 4, 3, 2, 4, 2}},
	}

	for _, table := range tables {
		got := containsDuplicate(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
