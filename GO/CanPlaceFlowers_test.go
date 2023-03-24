/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCanPlaceFlowers
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCanPlaceFlowers(t *testing.T) {
	tables := []struct {
		want bool
		nums []int
		n    int
	}{
		{true, []int{1, 0, 0, 0, 1}, 1},
		{false, []int{1, 0, 0, 0, 1}, 2},
	}

	for _, table := range tables {
		got := canPlaceFlowers(table.nums, table.n)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
