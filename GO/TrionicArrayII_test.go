/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestTrionicArrayII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestTrionicArrayII(t *testing.T) {
	tables := []struct {
		want int64
		tri  []int
	}{
		{-4, []int{0, -2, -1, -3, 0, 2, -1}},
		{14, []int{1, 4, 2, 7}},
	}

	for _, table := range tables {
		got := maxSumTrionic(table.tri)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
