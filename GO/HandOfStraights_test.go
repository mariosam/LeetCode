/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestHandOfStraights
 */
package GO

import (
	"reflect"
	"testing"
)

func TestHandOfStraights(t *testing.T) {
	tables := []struct {
		want bool
		w1   []int
		w2   int
	}{
		{true, []int{1, 2, 3, 6, 2, 3, 4, 7, 8}, 3},
		{false, []int{1, 2, 3, 4, 5}, 4},
	}

	for _, table := range tables {
		got := isNStraightHand(table.w1, table.w2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
