/**
 * @version GO 1.21.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumLengthOfPairChain
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumLengthOfPairChain(t *testing.T) {
	tables := []struct {
		want  int
		pairs [][]int
	}{
		{2, [][]int{{1, 2}, {2, 3}, {3, 4}}},
		{3, [][]int{{1, 2}, {7, 8}, {4, 5}}},
	}

	for _, table := range tables {
		got := findLongestChain(table.pairs)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
