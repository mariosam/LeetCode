/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindWordsThatCanBeFormedByCharacters
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindWordsThatCanBeFormedByCharacters(t *testing.T) {
	tables := []struct {
		want  int
		words []string
		chars string
	}{
		{6, []string{"cat", "bt", "hat", "tree"}, "atach"},
		{10, []string{"hello", "world", "leetcode"}, "welldonehoneyr"},
	}

	for _, table := range tables {
		got := countCharacters(table.words, table.chars)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
