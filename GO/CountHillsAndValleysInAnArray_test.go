/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountHillsAndValleysInAnArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountHillsAndValleysInAnArray(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{3, []int{2, 4, 1, 1, 6, 5}},
		{0, []int{6, 6, 5, 5, 4, 1}},
	}

	for _, table := range tables {
		got := countHillValley(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
