/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestStoneGameIV
 */
package GO

import (
	"reflect"
	"testing"
)

func TestStoneGameIV(t *testing.T) {
	tables := []struct {
		want bool
		nums int
	}{
		{true, 1},
		{false, 2},
		{true, 4},
	}

	for _, table := range tables {
		got := winnerSquareGame(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
