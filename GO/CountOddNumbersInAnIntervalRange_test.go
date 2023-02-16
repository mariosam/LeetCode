/**
 * @version GO 1.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountOddNumbersInAnIntervalRange
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountOddNumbersInAnIntervalRange(t *testing.T) {
	tables := []struct {
		want int
		low  int
		high int
	}{
		{3, 3, 7},
		{1, 8, 10},
		{86213013, 798273637, 970699661},
		{5, 0, 10},
	}

	for _, table := range tables {
		got := countOdds(table.low, table.high)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
