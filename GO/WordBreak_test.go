/**
 * @version GO 1.21.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestWordBreak
 */
package GO

import (
	"reflect"
	"testing"
)

func TestWordBreak(t *testing.T) {
	tables := []struct {
		want bool
		word string
		dict []string
	}{
		{true, "leetcode", []string{"leet", "code"}},
		{true, "applepenapple", []string{"apple", "pen"}},
		{false, "catsandog", []string{"cats", "dog", "sand", "and", "cat"}},
	}

	for _, table := range tables {
		got := wordBreak(table.word, table.dict)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
