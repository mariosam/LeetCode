/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindChampionII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindChampionII(t *testing.T) {
	tables := []struct {
		want int
		n    int
		k    [][]int
	}{
		{0, 3, [][]int{{0, 1}, {1, 2}}},
		{-1, 4, [][]int{{0, 2}, {1, 3}, {1, 2}}},
	}

	for _, table := range tables {
		got := findChampion(table.n, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %b but the return was this: %b", table.want, got)
		}
	}
}
