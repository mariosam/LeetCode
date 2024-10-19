/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSeparateBlackAndWhiteBalls
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSeparateBlackAndWhiteBalls(t *testing.T) {
	tables := []struct {
		want int64
		nums string
	}{
		{1, "101"},
		{2, "100"},
		{0, "0111"},
	}

	for _, table := range tables {
		got := minimumSteps(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
