/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestBoatsToSavePeople
 */
package GO

import (
	"reflect"
	"testing"
)

func TestBoatsToSavePeople(t *testing.T) {
	tables := []struct {
		want   int
		people []int
		limit  int
	}{
		{1, []int{1, 2}, 3},
		{3, []int{3, 2, 2, 1}, 3},
		{4, []int{3, 5, 3, 4}, 5},
	}

	for _, table := range tables {
		got := numRescueBoats(table.people, table.limit)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
