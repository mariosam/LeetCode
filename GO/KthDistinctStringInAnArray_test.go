/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestKthDistinctStringInAnArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestKthDistinctStringInAnArray(t *testing.T) {
	tables := []struct {
		want string
		nums []string
		pos  int
	}{
		{"a", []string{"d", "b", "c", "b", "c", "a"}, 2},
		{"aaa", []string{"aaa", "aa", "a"}, 1},
		{"", []string{"a", "b", "a"}, 3},
	}

	for _, table := range tables {
		got := kthDistinct(table.nums, table.pos)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
