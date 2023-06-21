/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestValidateStackSequences
 */
package GO

import (
	"reflect"
	"testing"
)

func TestValidateStackSequences(t *testing.T) {
	tables := []struct {
		want   bool
		pushed []int
		popped []int
	}{
		{true, []int{1, 2, 3, 4, 5}, []int{4, 5, 3, 2, 1}},
		{false, []int{1, 2, 3, 4, 5}, []int{4, 3, 5, 1, 2}},
	}

	for _, table := range tables {
		got := validateStackSequences(table.pushed, table.popped)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t to %d", table.want, got, table.pushed)
		}
	}
}
