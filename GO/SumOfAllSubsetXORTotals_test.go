/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSumOfAllSubsetXORTotals
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSumOfAllSubsetXORTotals(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{6, []int{1, 3}},
		{28, []int{5, 1, 6}},
		{480, []int{3, 4, 5, 6, 7, 8}},
	}

	for _, table := range tables {
		got := subsetXORSum(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
