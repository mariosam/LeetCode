/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCheckIfDigitsAreEqualInStringAfterOperationsI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCheckIfDigitsAreEqualInStringAfterOperationsI(t *testing.T) {
	tables := []struct {
		want  bool
		steps string
	}{
		{true, "3902"},
		{false, "34789"},
	}

	for _, table := range tables {
		got := hasSameDigits(table.steps)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
