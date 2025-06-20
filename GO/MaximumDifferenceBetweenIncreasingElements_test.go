/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumDifferenceBetweenIncreasingElements
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumDifferenceBetweenIncreasingElements(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{4, []int{7, 1, 5, 4}},
		{-1, []int{9, 4, 3, 2}},
		{9, []int{1, 5, 2, 10}},
	}

	for _, table := range tables {
		got := maximumDifference(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
