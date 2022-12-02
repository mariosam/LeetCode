/**
 * @version GO 1.19.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLengthOfLastWord
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLengthOfLastWord(t *testing.T) {
	tables := []struct {
		want int
		word string
	}{
		{5, "Hello World"},
		{4, "   fly me   to   the moon  "},
		{6, "luffy is still joyboy"},
		{1, "a"},
	}

	for _, table := range tables {
		got := lengthOfLastWord(table.word)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
