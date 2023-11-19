/**
 * @version GO 1.21.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestIsSubsequence
 */
package GO

import (
	"reflect"
	"testing"
)

func TestIsSubsequence(t *testing.T) {
	tables := []struct {
		want bool
		w1   string
		w2   string
	}{
		{true, "abc", "ahbgdc"},
		{false, "axc", "ahbgdc"},
	}

	for _, table := range tables {
		got := isSubsequence(table.w1, table.w2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
