/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestAddDigits
 */
package GO

import (
	"reflect"
	"testing"
)

func TestAddDigits(t *testing.T) {
	tables := []struct {
		want   int
		target int
	}{
		{2, 38},
		{0, 0},
	}

	for _, table := range tables {
		got := addDigits(table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
