/**
 * @version GO 1.19.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestRemoveElement
 */
package GO

import (
	"reflect"
	"testing"
)

func TestRemoveElement(t *testing.T) {
	tables := []struct {
		want int
		nums []int
		val  int
	}{
		{2, []int{3, 2, 2, 3}, 3},
		{5, []int{0, 1, 2, 2, 3, 0, 4, 2}, 2},
	}

	for _, table := range tables {
		got := removeElement(table.nums, table.val)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
