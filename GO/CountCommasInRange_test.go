/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountCommasInRange
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountCommasInRange(t *testing.T) {
	tables := []struct {
		want int
		nums int
	}{
		{3, 1002},
		{0, 998},
	}

	for _, table := range tables {
		got := countCommas(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
