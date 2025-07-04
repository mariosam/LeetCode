/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumDifferenceBetweenAdjacentElementsInACircularArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumDifferenceBetweenAdjacentElementsInACircularArray(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{3, []int{1, 2, 4}},
		{5, []int{-5, -10, -5}},
	}

	for _, table := range tables {
		got := maxAdjacentDistance(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
