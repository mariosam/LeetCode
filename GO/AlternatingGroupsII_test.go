/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestAlternatingGroupsII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestAlternatingGroupsII(t *testing.T) {
	tables := []struct {
		want   int
		prices []int
		fee    int
	}{
		{3, []int{0, 1, 0, 1, 0}, 3},
		{2, []int{0, 1, 0, 0, 1, 0, 1}, 6},
		{0, []int{1, 1, 0, 1}, 4},
	}

	for _, table := range tables {
		got := numberOfAlternatingGroups(table.prices, table.fee)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
