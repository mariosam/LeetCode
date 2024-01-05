/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCoinChangeII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCoinChangeII(t *testing.T) {
	tables := []struct {
		want   int
		amount int
		coins  []int
	}{
		{4, 5, []int{1, 2, 5}},
		{0, 3, []int{2}},
		{1, 10, []int{10}},
	}

	for _, table := range tables {
		got := change(table.amount, table.coins)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
