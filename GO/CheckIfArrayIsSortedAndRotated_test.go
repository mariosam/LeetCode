/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCheckIfArrayIsSortedAndRotated
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCheckIfArrayIsSortedAndRotated(t *testing.T) {
	tables := []struct {
		want  bool
		steps []int
	}{
		{true, []int{3, 4, 5, 1, 2}},
		{false, []int{2, 1, 3, 4}},
		{true, []int{1, 2, 3}},
	}

	for _, table := range tables {
		got := checkASR(table.steps)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
