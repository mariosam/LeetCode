/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountCommasInRangeII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountCommasInRangeII(t *testing.T) {
	tables := []struct {
		want int64
		nums int64
	}{
		{3, 1002},
		{0, 998},
	}

	for _, table := range tables {
		got := countCommasII(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
