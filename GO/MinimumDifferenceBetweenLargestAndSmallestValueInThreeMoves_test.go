/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumDifferenceBetweenLargestAndSmallestValueInThreeMoves
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumDifferenceBetweenLargestAndSmallestValueInThreeMoves(t *testing.T) {
	tables := []struct {
		want int
		a    []int
	}{
		{0, []int{5, 3, 2, 4}},
		{1, []int{1, 5, 0, 10, 14}},
		{0, []int{3, 100, 20}},
	}

	for _, table := range tables {
		got := minDifference(table.a)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
