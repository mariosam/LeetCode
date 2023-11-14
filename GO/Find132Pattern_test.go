/**
 * @version GO 1.21.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFind132Pattern
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFind132Pattern(t *testing.T) {
	tables := []struct {
		want bool
		nums []int
	}{
		{false, []int{1, 2, 3, 4}},
		{true, []int{3, 1, 4, 2}},
		{true, []int{-1, 3, 2, 0}},
	}

	for _, table := range tables {
		got := find132pattern(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
