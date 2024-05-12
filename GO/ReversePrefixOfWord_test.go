/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestReversePrefixOfWord
 */
package GO

import (
	"reflect"
	"testing"
)

func TestReversePrefixOfWord(t *testing.T) {
	tables := []struct {
		want string
		word string
		ch   byte
	}{
		{"dcbaefd", "abcdefd", 'd'},
		{"zxyxxe", "xyxzxe", 'z'},
		{"abcd", "abcd", 'z'},
	}

	for _, table := range tables {
		got := reversePrefix(table.word, table.ch)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
