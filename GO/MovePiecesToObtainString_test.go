/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMovePiecesToObtainString
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMovePiecesToObtainString(t *testing.T) {
	tables := []struct {
		want   bool
		start  string
		target string
	}{
		{true, "_L__R__R_", "L______RR"},
		{false, "R_L_", "__LR"},
		{false, "_R", "R_"},
	}

	for _, table := range tables {
		got := canChange(table.start, table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
