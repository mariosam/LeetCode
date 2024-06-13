/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestHeightChecker
 */
package GO

import (
	"reflect"
	"testing"
)

func TestHeightChecker(t *testing.T) {
	tables := []struct {
		want int
		w1   []int
	}{
		{3, []int{1, 1, 4, 2, 1, 3}},
		{5, []int{5, 1, 2, 3, 4}},
		{0, []int{1, 2, 3, 4, 5}},
	}

	for _, table := range tables {
		got := heightChecker(table.w1)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
