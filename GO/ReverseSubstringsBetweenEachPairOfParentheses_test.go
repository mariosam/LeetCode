/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestReverseSubstringsBetweenEachPairOfParentheses
 */
package GO

import (
	"reflect"
	"testing"
)

func TestReverseSubstringsBetweenEachPairOfParentheses(t *testing.T) {
	tables := []struct {
		want string
		str  string
	}{
		{"dcba", "(abcd)"},
		{"iloveu", "(u(love)i)"},
		{"leetcode", "(ed(et(oc))el)"},
	}

	for _, table := range tables {
		got := reverseParentheses(table.str)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
