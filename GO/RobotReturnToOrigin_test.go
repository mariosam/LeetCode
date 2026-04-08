/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestRobotReturnToOrigin
 */
package GO

import (
	"reflect"
	"testing"
)

func TestRobotReturnToOrigin(t *testing.T) {
	tables := []struct {
		want  bool
		moves string
	}{
		{true, "UD"},
		{false, "LL"},
	}

	for _, table := range tables {
		got := judgeCircle(table.moves)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
