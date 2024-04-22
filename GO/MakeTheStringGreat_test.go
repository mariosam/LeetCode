/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMakeTheStringGreat
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMakeTheStringGreat(t *testing.T) {
	tables := []struct {
		want string
		s    string
	}{
		{"leetcode", "leEeetcode"},
		{"", "abBAcC"},
		{"s", "s"},
	}

	for _, table := range tables {
		got := makeGood(table.s)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
