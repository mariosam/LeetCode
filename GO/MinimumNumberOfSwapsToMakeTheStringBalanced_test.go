/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumNumberOfSwapsToMakeTheStringBalanced
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumNumberOfSwapsToMakeTheStringBalanced(t *testing.T) {
	tables := []struct {
		want int
		s    string
	}{
		{1, "][]["},
		{2, "]]][[["},
		{0, "[]"},
	}

	for _, table := range tables {
		got := minSwaps(table.s)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
