/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestDetermineIfTwoStringsAreClose
 */
package GO

import (
	"reflect"
	"testing"
)

func TestDetermineIfTwoStringsAreClose(t *testing.T) {
	tables := []struct {
		want  bool
		word1 string
		word2 string
	}{
		{true, "abc", "bca"},
		{false, "a", "aa"},
		{true, "cabbba", "abbccc"},
	}

	for _, table := range tables {
		got := closeStrings(table.word1, table.word2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
