/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestBinaryGap
 */
package GO

import (
	"reflect"
	"testing"
)

func TestBinaryGap(t *testing.T) {
	tables := []struct {
		want int
		k    int
	}{
		{0, 8},
		{2, 5},
	}

	for _, table := range tables {
		got := binaryGap(table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
