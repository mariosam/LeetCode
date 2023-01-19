/**
 * @version GO 1.19.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumRoundsToCompleteAllTasks
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumRoundsToCompleteAllTasks(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{4, []int{2, 2, 3, 3, 2, 4, 4, 4, 4, 4}},
		{-1, []int{2, 3, 3}},
		{20, []int{69, 65, 62, 64, 70, 68, 69, 67, 60, 65, 69, 62, 65, 65, 61, 66, 68, 61, 65, 63, 60, 66, 68, 66, 67, 65, 63, 65, 70, 69, 70, 62, 68, 70, 60, 68, 65, 61, 64, 65, 63, 62, 62, 62, 67, 62, 62, 61, 66, 69}},
		{-1, []int{1, 2, 1}},
	}

	for _, table := range tables {
		got := minimumRounds(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
