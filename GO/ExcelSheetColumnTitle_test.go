/**
 * @version GO 1.21.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestExcelSheetColumnTitle
 */
package GO

import (
	"reflect"
	"testing"
)

func TestExcelSheetColumnTitle(t *testing.T) {
	tables := []struct {
		want   string
		colnum int
	}{
		{"A", 1},
		{"AB", 28},
		{"ZY", 701},
	}

	for _, table := range tables {
		got := convertToTitle(table.colnum)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
