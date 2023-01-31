/**
 * @version GO 1.19.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumIceCreamBarsTest
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumIceCreamBarsTest(t *testing.T) {
	tables := []struct {
		want  int
		nums  []int
		coins int
	}{
		{4, []int{1, 6, 3, 1, 2, 5}, 7},
		{0, []int{10, 6, 8, 7, 7, 8}, 5},
		{6, []int{1, 6, 3, 1, 2, 5}, 20},
		{9, []int{7, 3, 3, 6, 6, 6, 10, 5, 9, 2}, 56},
		{4, []int{10, 2, 10, 10, 10, 10, 8, 2, 7, 8}, 25},
	}

	for _, table := range tables {
		got := maxIceCream(table.nums, table.coins)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
