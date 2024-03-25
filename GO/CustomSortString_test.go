/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCustomSortString
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCustomSortString(t *testing.T) {
	tables := []struct {
		want  string
		word1 string
		word2 string
	}{
		{"cbad", "cba", "abcd"},
		{"bcad", "bcafg", "abcd"},
	}

	for _, table := range tables {
		got := customSortString(table.word1, table.word2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
