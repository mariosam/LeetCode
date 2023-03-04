/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestClimbingStairs
 */
package GO

import (
	"reflect"
	"testing"
)

func TestClimbingStairs(t *testing.T) {
	tables := []struct {
		want  int
		steps int
	}{
		{2, 2},
		{3, 3},
		{1, 1},
	}

	for _, table := range tables {
		got := climbStairs(table.steps)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
