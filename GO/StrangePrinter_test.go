/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestStrangePrinter
 */
package GO

import (
	"reflect"
	"testing"
)

func TestStrangePrinter(t *testing.T) {
	tables := []struct {
		want  int
		chars string
	}{
		{2, "aaabbb"},
		{2, "aba"},
	}

	for _, table := range tables {
		got := strangePrinter(table.chars)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
