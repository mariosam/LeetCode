/**
 * @version GO 1.21.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumASCIIDeleteSumForTwoStrings
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumASCIIDeleteSumForTwoStrings(t *testing.T) {
	tables := []struct {
		want int
		s1   string
		s2   string
	}{
		{231, "sea", "eat"},
		{403, "delete", "leet"},
	}

	for _, table := range tables {
		got := minimumDeleteSum(table.s1, table.s2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
