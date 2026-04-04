/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCheckifStringsCanBeMadeEqualWithOperationsII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCheckifStringsCanBeMadeEqualWithOperationsII(t *testing.T) {
	tables := []struct {
		want   bool
		steps  string
		locked string
	}{
		{true, "abcdba", "cabdab"},
		{false, "abe", "bea"},
	}

	for _, table := range tables {
		got := checkStrings(table.steps, table.locked)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
