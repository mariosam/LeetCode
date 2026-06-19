/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestProcessStringWithSpecialOperationsI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestProcessStringWithSpecialOperationsI(t *testing.T) {
	tables := []struct {
		want string
		s    string
	}{
		{"ba", "a#b%*"},
		{"", "z*#"},
	}

	for _, table := range tables {
		got := processStr(table.s)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
