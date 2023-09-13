/**
 * @version GO 1.21.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestExtraCharactersInString
 */
package GO

import (
	"reflect"
	"testing"
)

func TestExtraCharactersInString(t *testing.T) {
	tables := []struct {
		want    int
		letters string
		target  []string
	}{
		{1, "leetscode", []string{"leet", "code", "leetcode"}},
		{3, "sayhelloworld", []string{"hello", "world"}},
	}

	for _, table := range tables {
		got := minExtraChar(table.letters, table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %b but the return was this: %b", table.want, got)
		}
	}
}
