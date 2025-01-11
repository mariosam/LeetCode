/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountPrefixAndSuffixPairsI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountPrefixAndSuffixPairsI(t *testing.T) {
	tables := []struct {
		want  int
		words []string
	}{
		{4, []string{"a", "aba", "ababa", "aa"}},
		{2, []string{"pa", "papa", "ma", "mama"}},
		{0, []string{"abab", "ab"}},
	}

	for _, table := range tables {
		got := countPrefixSuffixPairs(table.words)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
