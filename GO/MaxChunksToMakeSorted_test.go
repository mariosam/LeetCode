/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaxChunksToMakeSorted
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaxChunksToMakeSorted(t *testing.T) {
	tables := []struct {
		want int
		m1   []int
	}{
		{1, []int{4, 3, 2, 1, 0}},
		{4, []int{1, 0, 2, 3, 4}},
	}

	for _, table := range tables {
		got := maxChunksToSorted(table.m1)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
