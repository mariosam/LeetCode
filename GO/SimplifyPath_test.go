/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSimplifyPath
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSimplifyPath(t *testing.T) {
	tables := []struct {
		want string
		str  string
	}{
		{"/home", "/home/"},
		{"/", "/../"},
		{"/home/foo", "/home//foo/"},
	}

	for _, table := range tables {
		got := simplifyPath(table.str)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s to %s", table.want, got, table.str)
		}
	}
}
