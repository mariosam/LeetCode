/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumCostForTickets
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumCostForTickets(t *testing.T) {
	tables := []struct {
		want int
		days []int
		cost []int
	}{
		{11, []int{1, 4, 6, 7, 8, 20}, []int{2, 7, 15}},
		{17, []int{1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 30, 31}, []int{2, 7, 15}},
	}

	for _, table := range tables {
		got := mincostTickets(table.days, table.cost)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
