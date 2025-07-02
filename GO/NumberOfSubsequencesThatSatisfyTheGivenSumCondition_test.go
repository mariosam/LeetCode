/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNumberOfSubsequencesThatSatisfyTheGivenSumCondition
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNumberOfSubsequencesThatSatisfyTheGivenSumCondition(t *testing.T) {
	tables := []struct {
		want   int
		nums   []int
		target int
	}{
		{4, []int{3, 5, 6, 7}, 9},
		{6, []int{3, 3, 6, 8}, 10},
		{61, []int{2, 3, 3, 4, 6, 7}, 12},
	}

	for _, table := range tables {
		got := numSubseq(table.nums, table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
