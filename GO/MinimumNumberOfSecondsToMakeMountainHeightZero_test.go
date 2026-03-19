/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumNumberOfSecondsToMakeMountainHeightZero
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumNumberOfSecondsToMakeMountainHeightZero(t *testing.T) {
	tables := []struct {
		want int64
		s    int
		lang []int
	}{
		{3, 4, []int{2, 1, 1}},
		{12, 10, []int{3, 2, 2, 4}},
		{15, 5, []int{1}},
	}

	for _, table := range tables {
		got := minNumberOfSeconds(table.s, table.lang)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
