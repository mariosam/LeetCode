/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumNumberOfPeopleToTeach
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumNumberOfPeopleToTeach(t *testing.T) {
	tables := []struct {
		want    int
		s       int
		lang    [][]int
		frriend [][]int
	}{
		{1, 2, [][]int{{1}, {2}, {1, 2}}, [][]int{{1, 2}, {1, 3}, {2, 3}}},
		{2, 3, [][]int{{2}, {1, 3}, {1, 2}, {3}}, [][]int{{1, 4}, {1, 2}, {3, 4}, {2, 3}}},
	}

	for _, table := range tables {
		got := minimumTeachings(table.s, table.lang, table.frriend)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
