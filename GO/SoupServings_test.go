/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSoupServings
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSoupServings(t *testing.T) {
	tables := []struct {
		want float64
		num  int
	}{
		{0.62500, 50},
		{0.71875, 100},
	}

	for _, table := range tables {
		got := soupServings(table.num)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %f but the return was this: %f", table.want, got)
		}
	}
}
