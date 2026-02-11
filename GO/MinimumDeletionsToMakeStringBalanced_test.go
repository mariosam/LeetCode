/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumDeletionsToMakeStringBalanced
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumDeletionsToMakeStringBalanced(t *testing.T) {
	tables := []struct {
		want int
		s    string
	}{
		{2, "aababbab"},
		{2, "bbaaaaabb"},
	}

	for _, table := range tables {
		got := minimumDeletions(table.s)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
