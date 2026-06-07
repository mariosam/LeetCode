/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumCostOfBuyingCandiesWithDiscount
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumCostOfBuyingCandiesWithDiscount(t *testing.T) {
	tables := []struct {
		want int
		cost []int
	}{
		{5, []int{1, 2, 3}},
		{23, []int{6, 5, 7, 9, 2, 2}},
		{10, []int{5, 5}},
	}

	for _, table := range tables {
		got := minimumCostWithDiscount(table.cost)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
