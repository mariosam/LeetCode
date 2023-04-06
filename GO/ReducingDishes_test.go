/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestReducingDishes
 */
package GO

import (
	"reflect"
	"testing"
)

func TestReducingDishes(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{14, []int{-1, -8, 0, 5, -9}},
		{20, []int{4, 3, 2}},
		{0, []int{-1, -4, -5}},
	}

	for _, table := range tables {
		got := maxSatisfaction(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
