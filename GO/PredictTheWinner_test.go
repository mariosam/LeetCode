/**
 * @version GO 1.21
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestPredictTheWinner
 */
package GO

import (
	"reflect"
	"testing"
)

func TestPredictTheWinner(t *testing.T) {
	tables := []struct {
		want bool
		num  []int
	}{
		{false, []int{1, 5, 2}},
		{true, []int{1, 5, 233, 7}},
	}

	for _, table := range tables {
		got := PredictTheWinner(table.num)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
