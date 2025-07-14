/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestRescheduleMeetingsForMaximumFreeTimeII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestRescheduleMeetingsForMaximumFreeTimeII(t *testing.T) {
	tables := []struct {
		want  int
		event int
		start []int
		end   []int
	}{
		{2, 5, []int{1, 3}, []int{2, 5}},
		{7, 10, []int{0, 7, 9}, []int{1, 8, 10}},
		{6, 10, []int{0, 3, 7, 9}, []int{1, 4, 8, 10}},
		{0, 5, []int{0, 1, 2, 3, 4}, []int{1, 2, 3, 4, 5}},
	}

	for _, table := range tables {
		got := maxFreeTime(table.event, table.start, table.end)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
