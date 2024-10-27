/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestParsingABooleanExpression
 */
package GO

import (
	"reflect"
	"testing"
)

func TestParsingABooleanExpression(t *testing.T) {
	tables := []struct {
		want         bool
		searchMatrix string
	}{
		{false, "&(|(f))"},
		{true, "|(f,f,f,t)"},
		{true, "!(&(f,t))"},
	}

	for _, table := range tables {
		got := parseBoolExpr(table.searchMatrix)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
