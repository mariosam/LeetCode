/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestRotateString
 */
package GO

import (
	"reflect"
	"testing"
)

func TestRotateString(t *testing.T) {
	tables := []struct {
		s    string
		goal string
		want bool
	}{
		{"abcde", "cdeab", true},
		{"abcde", "abced", false},
	}

	for _, table := range tables {
		got := rotateString(table.s, table.goal)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
