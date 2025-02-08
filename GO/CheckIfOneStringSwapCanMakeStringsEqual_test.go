/**
 * @version GO 1.22.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCheckIfOneStringSwapCanMakeStringsEqual
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCheckIfOneStringSwapCanMakeStringsEqual(t *testing.T) {
	tables := []struct {
		want   bool
		steps  string
		locked string
	}{
		{true, "bank", "kanb"},
		{false, "attack", "defend"},
		{true, "kelb", "kelb"},
	}

	for _, table := range tables {
		got := areAlmostEqual(table.steps, table.locked)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
