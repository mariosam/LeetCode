/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountTheNumberOfSpecialCharactersII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountTheNumberOfSpecialCharactersII(t *testing.T) {
	tables := []struct {
		want int
		low  string
	}{
		{3, "aaAbcBC"},
		{0, "abc"},
		{0, "AbBCab"},
	}

	for _, table := range tables {
		got := numberOfSpecialChars(table.low)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
