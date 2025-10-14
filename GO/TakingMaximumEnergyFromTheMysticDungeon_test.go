/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestTakingMaximumEnergyFromTheMysticDungeon
 */
package GO

import (
	"reflect"
	"testing"
)

func TestTakingMaximumEnergyFromTheMysticDungeon(t *testing.T) {
	tables := []struct {
		want    int
		tickets []int
		k       int
	}{
		{3, []int{5, 2, -10, -5, 1}, 3},
		{-1, []int{-2, -3, -1}, 2},
	}

	for _, table := range tables {
		got := maximumEnergy(table.tickets, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
