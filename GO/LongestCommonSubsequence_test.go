/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLongestCommonSubsequence
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLongestCommonSubsequence(t *testing.T) {
	tables := []struct {
		want  int
		word  string
		word2 string
	}{
		{3, "abcde", "ace"},
		{3, "abc", "abc"},
		{0, "abc", "def"},
	}

	for _, table := range tables {
		got := longestCommonSubsequence(table.word, table.word2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
