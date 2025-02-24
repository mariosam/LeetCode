/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestRemoveAllOccurrencesOfaSubstring
 */
package GO

import (
	"reflect"
	"testing"
)

func TestRemoveAllOccurrencesOfaSubstring(t *testing.T) {
	tables := []struct {
		want string
		word string
		ch   string
	}{
		{"dab", "daabcbaabcbc", "abc"},
		{"ab", "axxxxyyyyb", "xy"},
	}

	for _, table := range tables {
		got := removeOccurrences(table.word, table.ch)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
