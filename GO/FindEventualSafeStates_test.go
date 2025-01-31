/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindEventualSafeStates
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindEventualSafeStates(t *testing.T) {
	tables := []struct {
		want []int
		n    [][]int
	}{
		{[]int{2, 4, 5, 6}, [][]int{{1, 2}, {2, 3}, {5}, {0}, {5}, {}, {}}},
		{[]int{4}, [][]int{{1, 2, 3, 4}, {1, 2}, {3, 4}, {0, 4}, {}}},
	}

	for _, table := range tables {
		got := eventualSafeNodes(table.n)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
