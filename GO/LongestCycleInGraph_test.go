/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLongestCycleInGraph
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLongestCycleInGraph(t *testing.T) {
	tables := []struct {
		want int
		word []int
	}{
		{3, []int{3, 3, 4, 2, 3}},
		{-1, []int{2, -1, 3, 1}},
	}

	for _, table := range tables {
		got := longestCycle(table.word)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
