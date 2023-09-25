/**
 * @version GO 1.21.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumPenaltyForShop
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumPenaltyForShop(t *testing.T) {
	tables := []struct {
		want int
		nums string
	}{
		{2, "YYNY"},
		{0, "NNNNN"},
		{4, "YYYY"},
	}

	for _, table := range tables {
		got := bestClosingTime(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
