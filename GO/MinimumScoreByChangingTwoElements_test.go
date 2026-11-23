/**
 * @version GO 1.27.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumScoreByChangingTwoElements
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumScoreByChangingTwoElements(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{3, []int{1, 4, 7, 8, 5}},
		{0, []int{1, 4, 3}},
	}

	for _, table := range tables {
		got := minimizeSum(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
