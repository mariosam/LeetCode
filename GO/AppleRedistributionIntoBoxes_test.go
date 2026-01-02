/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestAppleRedistributionIntoBoxes
 */
package GO

import (
	"reflect"
	"testing"
)

func TestAppleRedistributionIntoBoxes(t *testing.T) {
	tables := []struct {
		want   int
		prices []int
		fee    []int
	}{
		{2, []int{1, 3, 2}, []int{4, 3, 1, 5, 2}},
		{4, []int{5, 5, 5}, []int{2, 4, 2, 7}},
	}

	for _, table := range tables {
		got := minimumBoxes(table.prices, table.fee)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
