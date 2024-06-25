/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountNumberOfNiceSubarrays
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountNumberOfNiceSubarrays(t *testing.T) {
	tables := []struct {
		want int
		low  []int
		high int
	}{
		{2, []int{1, 1, 2, 1, 1}, 3},
		{0, []int{2, 4, 6}, 1},
		{16, []int{2, 2, 2, 1, 2, 2, 1, 2, 2, 2}, 2},
	}

	for _, table := range tables {
		got := numberOfSubarrays(table.low, table.high)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
