/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLexicographicallySmallestEquivalentString
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLexicographicallySmallestEquivalentString(t *testing.T) {
	tables := []struct {
		want string
		s1   string
		s2   string
		base string
	}{
		{"makkek", "parker", "morris", "parser"},
		{"hdld", "hello", "world", "hold"},
		{"aauaaaaada", "leetcode", "programs", "sourcecode"},
	}

	for _, table := range tables {
		got := smallestEquivalentString(table.s1, table.s2, table.base)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
