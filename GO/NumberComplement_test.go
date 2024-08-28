/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNumberComplement
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNumberComplement(t *testing.T) {
	tables := []struct {
		want int
		bank int
	}{
		{2, 5},
		{0, 1},
	}

	for _, table := range tables {
		got := findComplement(table.bank)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
