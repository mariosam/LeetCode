/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLargestDivisibleSubset
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLargestDivisibleSubset(t *testing.T) {
	tables := []struct {
		want []int
		nums []int
	}{
		{[]int{2, 1}, []int{1, 2, 3}},
		{[]int{8, 4, 2, 1}, []int{1, 2, 4, 8}},
	}

	for _, table := range tables {
		got := largestDivisibleSubset(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %v but the return was this: %v", table.want, got)
		}
	}
}
