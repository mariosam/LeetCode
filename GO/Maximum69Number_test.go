/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximum69Number
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximum69Number(t *testing.T) {
	tables := []struct {
		want int
		num  int
	}{
		{9969, 9669},
		{9999, 9996},
		{9999, 9999},
	}

	for _, table := range tables {
		got := maximum69Number(table.num)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
