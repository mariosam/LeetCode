/**
 * @version GO 1.21.6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestGroupAnagrams
 */
package GO

import (
	"reflect"
	"testing"
)

func TestGroupAnagrams(t *testing.T) {
	tables := []struct {
		want [][]string
		n    []string
	}{
		{[][]string{{"bat"}, {"nat", "tan"}, {"ate", "eat", "tea"}}, []string{"eat", "tea", "tan", "ate", "nat", "bat"}},
		{[][]string{{""}}, []string{""}},
		{[][]string{{"a"}}, []string{"a"}},
	}

	for _, table := range tables {
		got := groupAnagrams(table.n)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
