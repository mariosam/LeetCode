/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumCommonValue
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumCommonValue(t *testing.T) {
	tables := []struct {
		want int
		days []int
		cost []int
	}{
		{2, []int{1, 2, 3}, []int{2, 4}},
		{2, []int{1, 2, 3, 6}, []int{2, 3, 4, 5}},
	}

	for _, table := range tables {
		got := getCommon(table.days, table.cost)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
