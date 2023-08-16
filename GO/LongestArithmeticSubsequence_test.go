/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLongestArithmeticSubsequence
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLongestArithmeticSubsequence(t *testing.T) {
	tables := []struct {
		want int
		arr  []int
	}{
		{4, []int{3, 6, 9, 12}},
		{3, []int{9, 4, 7, 2, 10}},
		{4, []int{20, 1, 15, 3, 10, 5, 8}},
	}

	for _, table := range tables {
		got := longestArithSeqLength(table.arr)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
