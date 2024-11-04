/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestDeleteCharactersToMakeFancyString
 */
package GO

import (
	"reflect"
	"testing"
)

func TestDeleteCharactersToMakeFancyString(t *testing.T) {
	tables := []struct {
		want  string
		word1 string
	}{
		{"leetcode", "leeetcode"},
		{"aabaa", "aaabaaaa"},
		{"aab", "aab"},
	}

	for _, table := range tables {
		got := makeFancyString(table.word1)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
