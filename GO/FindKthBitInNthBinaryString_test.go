/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindKthBitInNthBinaryString
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindKthBitInNthBinaryString(t *testing.T) {
	tables := []struct {
		want byte
		n    int
		k    int
	}{
		{'0', 3, 1},
		{'1', 4, 11},
	}

	for _, table := range tables {
		got := findKthBit(table.n, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %b but the return was this: %b", table.want, got)
		}
	}
}
