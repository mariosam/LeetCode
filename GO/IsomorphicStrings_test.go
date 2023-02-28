/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestIsomorphicStrings
 */
package GO

import (
	"reflect"
	"testing"
)

func TestIsomorphicStrings(t *testing.T) {
	tables := []struct {
		want bool
		w1   string
		w2   string
	}{
		{true, "egg", "add"},
		{false, "foo", "bar"},
		{true, "paper", "title"},
	}

	for _, table := range tables {
		got := isIsomorphic(table.w1, table.w2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
