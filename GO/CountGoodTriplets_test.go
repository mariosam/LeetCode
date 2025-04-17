/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountGoodTriplets
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountGoodTriplets(t *testing.T) {
	tables := []struct {
		want int
		nums []int
		a    int
		b    int
		c    int
	}{
		{4, []int{3, 0, 1, 1, 9, 7}, 7, 2, 3},
		{0, []int{1, 1, 2, 2, 3}, 0, 0, 1},
	}

	for _, table := range tables {
		got := countGoodTriplets(table.nums, table.a, table.b, table.c)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
