/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestJumpGameIII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestJumpGameIII(t *testing.T) {
	tables := []struct {
		want  bool
		nums  []int
		start int
	}{
		{true, []int{4, 2, 3, 0, 3, 1, 2}, 5},
		{true, []int{4, 2, 3, 0, 3, 1, 2}, 0},
		{false, []int{23, 0, 2, 1, 2}, 2},
	}

	for _, table := range tables {
		got := canReach(table.nums, table.start)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %v but the return was this: %v", table.want, got)
		}
	}
}
