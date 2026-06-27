/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNumberOfZigZagArraysI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNumberOfZigZagArraysI(t *testing.T) {
	tables := []struct {
		want int
		n    int
		l    int
		r    int
	}{
		{2, 3, 4, 5},
		{10, 3, 1, 3},
	}

	for _, table := range tables {
		got := zigZagArrays(table.n, table.l, table.r)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
