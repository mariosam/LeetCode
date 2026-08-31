/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSumGame
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSumGame(t *testing.T) {
	tables := []struct {
		want   bool
		spells string
	}{
		{false, "5023"},
		{true, "25??"},
		{false, "?3295???"},
	}

	for _, table := range tables {
		got := sumGame(table.spells)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
