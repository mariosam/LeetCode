/**
 * @version GO 1.20.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumFlipsToMakeAorBequalC
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumFlipsToMakeAorBequalC(t *testing.T) {
	tables := []struct {
		want int
		a    int
		b    int
		c    int
	}{
		{3, 2, 6, 5},
		{1, 4, 2, 7},
		{0, 1, 2, 3},
	}

	for _, table := range tables {
		got := minFlips(table.a, table.b, table.c)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
