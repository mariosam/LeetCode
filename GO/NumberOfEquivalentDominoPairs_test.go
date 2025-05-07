/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNumberOfEquivalentDominoPairs
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNumberOfEquivalentDominoPairs(t *testing.T) {
	tables := []struct {
		want int
		n    [][]int
	}{
		{1, [][]int{{1, 2}, {2, 1}, {3, 4}, {5, 6}}},
		{3, [][]int{{1, 2}, {1, 2}, {1, 1}, {1, 2}, {2, 2}}},
	}

	for _, table := range tables {
		got := numEquivDominoPairs(table.n)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
