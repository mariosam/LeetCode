/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestBulbSwitcher
 */
package GO

import (
	"reflect"
	"testing"
)

func TestBulbSwitcher(t *testing.T) {
	tables := []struct {
		want int
		num  int
	}{
		{1, 3},
		{0, 0},
		{1, 1},
	}

	for _, table := range tables {
		got := bulbSwitch(table.num)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
