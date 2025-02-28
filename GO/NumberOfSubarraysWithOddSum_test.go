/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNumberOfSubarraysWithOddSum
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNumberOfSubarraysWithOddSum(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{4, []int{1, 3, 5}},
		{0, []int{2, 4, 6}},
		{16, []int{1, 2, 3, 4, 5, 6, 7}},
	}

	for _, table := range tables {
		got := numOfSubarrays(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
