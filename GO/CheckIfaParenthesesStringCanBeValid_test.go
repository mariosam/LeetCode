/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCheckIfaParenthesesStringCanBeValid
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCheckIfaParenthesesStringCanBeValid(t *testing.T) {
	tables := []struct {
		want   bool
		steps  string
		locked string
	}{
		{true, "))()))", "010100"},
		{true, "()()", "0000"},
		{false, ")", "0"},
	}

	for _, table := range tables {
		got := canBeValid(table.steps, table.locked)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
