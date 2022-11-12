/**
 * @version GO 1.19.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLongestSubstring
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLongestSubstring(t *testing.T) {
	tables := []struct {
		want int
		word string
	}{
		{3, "dvdf"},
		{1, "bbbbb"},
		{3, "pwwkew"},
		{3, "abcabcbb"},
		{2, "abba"},
		{3, "abccb"},
		{3, "abccba"},
		{6, "professor"},
		{11, "salmonserbic"},
		{7, "salmonsalmosalmonella"},
	}

	for _, table := range tables {
		got := lengthOfLongestSubstring(table.word)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
