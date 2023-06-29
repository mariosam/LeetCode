/**
 * @version GO 1.20.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCanMakeArithmeticProgressionFromSequence
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCanMakeArithmeticProgressionFromSequence(t *testing.T) {
	tables := []struct {
		want bool
		nums []int
	}{
		{true, []int{3, 5, 1}},
		{false, []int{1, 2, 4}},
	}

	for _, table := range tables {
		got := canMakeArithmeticProgression(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
