/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestAngleBetweenHandsOfClock
 */
package GO

import (
	"reflect"
	"testing"
)

func TestAngleBetweenHandsOfClock(t *testing.T) {
	tables := []struct {
		want    float64
		hour    int
		minutes int
	}{
		{165, 12, 30},
		{75, 3, 30},
		{7.5, 3, 15},
	}

	for _, table := range tables {
		got := angleClock(table.hour, table.minutes)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %f but the return was this: %f", table.want, got)
		}
	}
}
