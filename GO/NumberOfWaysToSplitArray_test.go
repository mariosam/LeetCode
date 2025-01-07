/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNumberOfWaysToSplitArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNumberOfWaysToSplitArray(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{2, []int{10, 4, -8, 7}},
		{2, []int{2, 3, 1, 0}},
	}

	for _, table := range tables {
		got := waysToSplitArray(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
