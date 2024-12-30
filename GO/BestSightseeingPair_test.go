/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestBestSightseeingPair
 */
package GO

import (
	"reflect"
	"testing"
)

func TestBestSightseeingPair(t *testing.T) {
	tables := []struct {
		want   int
		prices []int
	}{
		{11, []int{8, 1, 5, 2, 6}},
		{2, []int{1, 2}},
	}

	for _, table := range tables {
		got := maxScoreSightseeingPair(table.prices)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
