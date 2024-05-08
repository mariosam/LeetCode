/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNumberOfWonderfulSubstrings
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNumberOfWonderfulSubstrings(t *testing.T) {
	tables := []struct {
		want int64
		nums string
	}{
		{4, "aba"},
		{9, "aabb"},
		{2, "he"},
	}

	for _, table := range tables {
		got := wonderfulSubstrings(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
