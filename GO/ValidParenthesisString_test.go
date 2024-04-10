/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test
 */
package GO

import "testing"

func TestValidParenthesisString(t *testing.T) {
	tables := []struct {
		ops  string
		want bool
	}{
		{"()", true},
		{"(*)", true},
		{"(*))", true},
	}

	for _, table := range tables {
		got := checkValidString(table.ops)

		if got != table.want {
			t.Errorf("Waiting for this %t - %s - but the return was this: %t", table.want, table.ops, got)
		}
	}
}
