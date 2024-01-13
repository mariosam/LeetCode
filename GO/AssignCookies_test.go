/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestAssignCookies
 */
package GO

import (
	"reflect"
	"testing"
)

func TestAssignCookies(t *testing.T) {
	tables := []struct {
		want   int
		prices []int
		fee    []int
	}{
		{1, []int{1, 2, 3}, []int{1, 1}},
		{2, []int{1, 2}, []int{1, 2, 3}},
	}

	for _, table := range tables {
		got := findContentChildren(table.prices, table.fee)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
