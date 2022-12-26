/**
 * @version GO 1.19.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLongestCommonPrefix
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLongestCommonPrefix(t *testing.T) {
	tables := []struct {
		want string
		strs []string
	}{
		{"fl", []string{"flower", "flow", "flight"}},
		{"", []string{"dog", "racecar", "car"}},
		{"a", []string{"a"}},
	}

	for _, table := range tables {
		got := longestCommonPrefix(table.strs)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
