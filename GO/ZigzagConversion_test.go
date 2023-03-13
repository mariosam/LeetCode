/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestZigzagConversion
 */
package GO

import (
	"reflect"
	"testing"
)

func TestZigzagConversion(t *testing.T) {
	tables := []struct {
		want string
		strs string
		num  int
	}{
		{"PAHNAPLSIIGYIR", "PAYPALISHIRING", 3},
		{"PINALSIGYAHRPI", "PAYPALISHIRING", 4},
		{"A", "A", 1},
	}

	for _, table := range tables {
		got := convert(table.strs, table.num)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
