/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumCostToConvertStringI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumCostToConvertStringI(t *testing.T) {
	tables := []struct {
		want     int64
		source   string
		target   string
		original []byte
		changed  []byte
		cost     []int
	}{
		{28, "abcd", "acbe", []byte{'a', 'b', 'c', 'c', 'e', 'd'}, []byte{'b', 'c', 'b', 'e', 'b', 'e'}, []int{2, 5, 5, 1, 2, 20}},
		{12, "aaaa", "bbbb", []byte{'a', 'c'}, []byte{'c', 'b'}, []int{1, 2}},
		{-1, "abcd", "abce", []byte{'a'}, []byte{'e'}, []int{10000}},
	}

	for _, table := range tables {
		got := minimumCost(table.source, table.target, table.original, table.changed, table.cost)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
