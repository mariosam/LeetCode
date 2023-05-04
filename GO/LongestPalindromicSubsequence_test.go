/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLongestPalindromicSubsequence
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLongestPalindromicSubsequence(t *testing.T) {
	tables := []struct {
		want int
		word string
	}{
		{4, "bbbab"},
		{2, "cbbd"},
	}

	for _, table := range tables {
		got := longestPalindromeSubseq(table.word)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
