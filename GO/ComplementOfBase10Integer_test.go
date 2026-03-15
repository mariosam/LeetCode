/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestComplementOfBase10Integer
 */
package GO

import (
	"reflect"
	"testing"
)

func TestComplementOfBase10Integer(t *testing.T) {
	tables := []struct {
		want     int
		version1 int
	}{
		{2, 5},
		{0, 7},
		{5, 10},
	}

	for _, table := range tables {
		got := bitwiseComplement(table.version1)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
