/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestGenerateParentheses
 */
package GO

import (
	"reflect"
	"testing"
)

func TestGenerateParentheses(t *testing.T) {
	tables := []struct {
		want []string
		n    int
	}{
		{[]string{"((()))", "(()())", "(())()", "()(())", "()()()"}, 3},
		{[]string{"()"}, 1},
	}

	for _, table := range tables {
		got := generateParenthesis(table.n)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
