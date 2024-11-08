/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumNumberOfChangesToMakeBinaryStringBeautiful
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumNumberOfChangesToMakeBinaryStringBeautiful(t *testing.T) {
	tables := []struct {
		want int
		nums string
	}{
		{2, "1001"},
		{1, "10"},
		{0, "0000"},
	}

	for _, table := range tables {
		got := minChanges(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
