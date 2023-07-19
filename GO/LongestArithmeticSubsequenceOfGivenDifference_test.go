/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLongestArithmeticSubsequenceOfGivenDifference
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLongestArithmeticSubsequenceOfGivenDifference(t *testing.T) {
	tables := []struct {
		want int
		arr  []int
		diff int
	}{
		{4, []int{1, 2, 3, 4}, 1},
		{1, []int{1, 3, 5, 7}, 1},
		{4, []int{1, 5, 7, 8, 5, 3, 4, 2, 1}, -2},
	}

	for _, table := range tables {
		got := longestSubsequence(table.arr, table.diff)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
