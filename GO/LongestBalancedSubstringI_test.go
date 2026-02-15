/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLongestBalancedSubstringI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLongestBalancedSubstringI(t *testing.T) {
	tables := []struct {
		want int
		arr  string
	}{
		{4, "abbac"},
		{4, "zzabccy"},
		{2, "aba"},
	}

	for _, table := range tables {
		got := longestBalanced(table.arr)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
