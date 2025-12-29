/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximizeHappinessOfSelectedChildren
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximizeHappinessOfSelectedChildren(t *testing.T) {
	tables := []struct {
		want   int64
		answer []int
		k      int
	}{
		{4, []int{1, 2, 3}, 2},
		{1, []int{1, 1, 1, 1}, 2},
		{5, []int{2, 3, 4, 5}, 1},
	}

	for _, table := range tables {
		got := maximumHappinessSum(table.answer, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
