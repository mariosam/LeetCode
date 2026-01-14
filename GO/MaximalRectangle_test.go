/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximalRectangle
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximalRectangle(t *testing.T) {
	tables := []struct {
		want   int
		answer [][]byte
	}{
		{6, [][]byte{{'1', '0', '1', '0', '0'}, {'1', '0', '1', '1', '1'}, {'1', '1', '1', '1', '1'}, {'1', '0', '0', '1', '0'}}},
		{0, [][]byte{{'0'}}},
		{1, [][]byte{{'1'}}},
	}

	for _, table := range tables {
		got := maximalRectangle(table.answer)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
