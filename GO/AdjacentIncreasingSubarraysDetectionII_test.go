/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestAdjacentIncreasingSubarraysDetectionII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestAdjacentIncreasingSubarraysDetectionII(t *testing.T) {
	tables := []struct {
		want   int
		prices []int
	}{
		{3, []int{2, 5, 7, 8, 9, 2, 3, 4, 3, 1}},
		{2, []int{1, 2, 3, 4, 4, 4, 4, 5, 6, 7}},
	}

	for _, table := range tables {
		got := maxIncreasingSubarrays(table.prices)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
