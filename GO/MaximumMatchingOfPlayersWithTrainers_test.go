/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumMatchingOfPlayersWithTrainers
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumMatchingOfPlayersWithTrainers(t *testing.T) {
	tables := []struct {
		want int
		s    []int
		k    []int
	}{
		{2, []int{4, 7, 9}, []int{8, 2, 5, 8}},
		{1, []int{1, 1, 1}, []int{10}},
	}

	for _, table := range tables {
		got := matchPlayersAndTrainers(table.s, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
