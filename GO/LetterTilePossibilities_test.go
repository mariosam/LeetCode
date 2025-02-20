/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLetterTilePossibilities
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLetterTilePossibilities(t *testing.T) {
	tables := []struct {
		want int
		word string
	}{
		{8, "AAB"},
		{188, "AAABBC"},
		{1, "V"},
	}

	for _, table := range tables {
		got := numTilePossibilities(table.word)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
