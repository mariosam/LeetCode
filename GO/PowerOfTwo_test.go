/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestPowerOfTwo
 */
package GO

import (
	"reflect"
	"testing"
)

func TestPowerOfTwo(t *testing.T) {
	tables := []struct {
		want bool
		num  int
	}{
		{true, 1},
		{true, 16},
		{false, 3},
	}

	for _, table := range tables {
		got := isPowerOfTwo(table.num)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
