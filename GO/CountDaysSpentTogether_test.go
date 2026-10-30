/**
 * @version GO 1.27.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountDaysSpentTogether
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountDaysSpentTogether(t *testing.T) {
	tables := []struct {
		want        int
		arriveAlice string
		leaveAlice  string
		arriveBob   string
		leaveBob    string
	}{
		{3, "08-15", "08-18", "08-16", "08-19"},
		{0, "10-01", "10-31", "11-01", "12-31"},
	}

	for _, table := range tables {
		got := countDaysTogether(table.arriveAlice, table.leaveAlice, table.arriveBob, table.leaveBob)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
