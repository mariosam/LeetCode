/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumNumberOfIncrementsOnSubarraysToFormTargetArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumNumberOfIncrementsOnSubarraysToFormTargetArray(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{3, []int{1, 2, 3, 2, 1}},
		{4, []int{3, 1, 1, 2}},
		{7, []int{3, 1, 5, 4, 2}},
	}

	for _, table := range tables {
		got := minNumberOperations(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
