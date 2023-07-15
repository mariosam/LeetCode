/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestPutMarblesInBags
 */
package GO

import (
	"reflect"
	"testing"
)

func TestPutMarblesInBags(t *testing.T) {
	tables := []struct {
		want int64
		nums []int
		k    int
	}{
		{4, []int{1, 3, 5, 1}, 2},
		{0, []int{1, 3}, 2},
	}

	for _, table := range tables {
		got := putMarbles(table.nums, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
