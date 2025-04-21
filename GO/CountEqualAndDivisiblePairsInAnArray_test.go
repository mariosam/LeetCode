/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountEqualAndDivisiblePairsInAnArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountEqualAndDivisiblePairsInAnArray(t *testing.T) {
	tables := []struct {
		want int
		nums []int
		a    int
	}{
		{4, []int{3, 1, 2, 2, 2, 1, 3}, 2},
		{0, []int{1, 2, 3, 4}, 1},
	}

	for _, table := range tables {
		got := countPairs(table.nums, table.a)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
