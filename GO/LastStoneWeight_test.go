/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLastStoneWeight
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLastStoneWeight(t *testing.T) {
	tables := []struct {
		want int
		arr  []int
	}{
		{1, []int{2, 7, 4, 1, 8, 1}},
		{1, []int{1}},
		{2, []int{1, 3}},
	}

	for _, table := range tables {
		got := lastStoneWeight(table.arr)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
