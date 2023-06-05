/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestProfitableSchemes
 */
package GO

import (
	"reflect"
	"testing"
)

func TestProfitableSchemes(t *testing.T) {
	tables := []struct {
		want   int
		num    int
		min    int
		group  []int
		profit []int
	}{
		{2, 5, 3, []int{2, 2}, []int{2, 3}},
		{7, 10, 5, []int{2, 3, 5}, []int{6, 7, 8}},
	}

	for _, table := range tables {
		got := profitableSchemes(table.num, table.min, table.group, table.profit)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
