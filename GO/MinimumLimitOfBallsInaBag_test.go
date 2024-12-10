/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumLimitOfBallsInaBag
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumLimitOfBallsInaBag(t *testing.T) {
	tables := []struct {
		want int
		nums []int
		max  int
	}{
		{3, []int{9}, 2},
		{2, []int{2, 4, 8, 2}, 4},
	}

	for _, table := range tables {
		got := minimumSize(table.nums, table.max)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
