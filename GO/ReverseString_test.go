/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestReverseString
 */
package GO

import (
	"reflect"
	"testing"
)

func TestReverseString(t *testing.T) {
	tables := []struct {
		want []byte
		str  []byte
	}{
		{[]byte{'o', 'l', 'l', 'e', 'h'}, []byte{'h', 'e', 'l', 'l', 'o'}},
		{[]byte{'h', 'a', 'n', 'n', 'a', 'H'}, []byte{'H', 'a', 'n', 'n', 'a', 'h'}},
	}

	for _, table := range tables {
		got := reverseString(table.str)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
