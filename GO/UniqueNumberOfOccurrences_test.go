/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestUniqueNumberOfOccurrences
 */
package GO

import (
	"reflect"
	"testing"
)

func TestUniqueNumberOfOccurrences(t *testing.T) {
	tables := []struct {
		want bool
		arr  []int
	}{
		{true, []int{1, 2, 2, 1, 1, 3}},
		{false, []int{1, 2}},
		{true, []int{-3, 0, 1, -3, 1, 1, 1, -3, 10, 0}},
	}

	for _, table := range tables {
		got := uniqueOccurrences(table.arr)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t to %d", table.want, got, table.arr)
		}
	}
}
