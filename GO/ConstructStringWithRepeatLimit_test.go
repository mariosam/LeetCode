/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestConstructStringWithRepeatLimit
 */
package GO

import (
	"reflect"
	"testing"
)

func TestConstructStringWithRepeatLimit(t *testing.T) {
	tables := []struct {
		want string
		s    string
		num  int
	}{
		{"zzcccac", "cczazcc", 3},
		{"bbabaa", "aababab", 2},
	}

	for _, table := range tables {
		got := repeatLimitedString(table.s, table.num)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
