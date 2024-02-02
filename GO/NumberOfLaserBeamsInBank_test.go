/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNumberOfLaserBeamsInBank
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNumberOfLaserBeamsInBank(t *testing.T) {
	tables := []struct {
		want int
		bank []string
	}{
		{8, []string{"011001", "000000", "010100", "001000"}},
		{0, []string{"000", "111", "000"}},
	}

	for _, table := range tables {
		got := numberOfBeams(table.bank)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
