/**
 * @version GO 1.27.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountNonDecreasingSubarraysAfterKOperations
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountNonDecreasingSubarraysAfterKOperations(t *testing.T) {
	tables := []struct {
		want int64
		low  []int
		k    int
	}{
		{17, []int{6, 3, 1, 2, 4, 4}, 7},
		{12, []int{6, 3, 1, 3, 6}, 4},
	}

	for _, table := range tables {
		got := countNonDecreasingSubarrays(table.low, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
