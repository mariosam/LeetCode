/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSpecialArrayI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSpecialArrayI(t *testing.T) {
	tables := []struct {
		want bool
		k    []int
	}{
		{true, []int{1}},
		{true, []int{2, 1, 4}},
		{false, []int{4, 3, 1, 6}},
	}

	for _, table := range tables {
		got := isArraySpecial(table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
