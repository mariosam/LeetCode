/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestTimeNeededToBuyTickets
 */
package GO

import (
	"reflect"
	"testing"
)

func TestTimeNeededToBuyTickets(t *testing.T) {
	tables := []struct {
		want    int
		tickets []int
		k       int
	}{
		{6, []int{2, 3, 2}, 2},
		{8, []int{5, 1, 1, 1}, 0},
	}

	for _, table := range tables {
		got := timeRequiredToBuy(table.tickets, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
