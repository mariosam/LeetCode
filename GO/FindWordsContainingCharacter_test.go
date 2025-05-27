/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindWordsContainingCharacter
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindWordsContainingCharacter(t *testing.T) {
	tables := []struct {
		want []int
		word []string
		x    byte
	}{
		{[]int{0, 1}, []string{"leet", "code"}, 'e'},
		{[]int{0, 2}, []string{"abc", "bcd", "aaaa", "cbc"}, 'a'},
		{[]int{}, []string{"abc", "bcd", "aaaa", "cbc"}, 'z'},
	}

	for _, table := range tables {
		got := findWordsContaining(table.word, table.x)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
