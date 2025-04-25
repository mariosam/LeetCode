/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountTheHiddenSequences
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountTheHiddenSequences(t *testing.T) {
	tables := []struct {
		want  int
		diff  []int
		low   int
		upper int
	}{
		{2, []int{1, -3, 4}, 1, 6},
		{4, []int{3, -4, 5, 1, -2}, -4, 5},
		{0, []int{4, -7, 2}, 3, 6},
	}

	for _, table := range tables {
		got := numberOfArrays(table.diff, table.low, table.upper)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
