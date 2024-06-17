/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumIncrementToMakeArrayUnique
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumIncrementToMakeArrayUnique(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{1, []int{1, 2, 2}},
		{6, []int{3, 2, 1, 2, 1, 7}},
	}

	for _, table := range tables {
		got := minIncrementForUnique(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
