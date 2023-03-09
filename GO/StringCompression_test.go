/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestStringCompression
 */
package GO

import (
	"reflect"
	"testing"
)

func TestStringCompression(t *testing.T) {
	tables := []struct {
		want  int
		chars []byte
	}{
		{6, []byte{'a', 'a', 'b', 'b', 'c', 'c', 'c'}},
		{1, []byte{'a'}},
		{4, []byte{'a', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b'}},
	}

	for _, table := range tables {
		got := compress(table.chars)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
