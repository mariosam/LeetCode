/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSuccessfulPairsOfSpellsAndPotions
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSuccessfulPairsOfSpellsAndPotions(t *testing.T) {
	tables := []struct {
		want    []int
		spells  []int
		potions []int
		success int64
	}{
		{[]int{4, 0, 3}, []int{5, 1, 3}, []int{1, 2, 3, 4, 5}, 7},
		{[]int{2, 0, 2}, []int{3, 1, 2}, []int{8, 5, 8}, 16},
	}

	for _, table := range tables {
		got := successfulPairs(table.spells, table.potions, table.success)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
