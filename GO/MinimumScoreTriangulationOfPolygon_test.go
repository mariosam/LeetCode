/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumScoreTriangulationOfPolygon
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumScoreTriangulationOfPolygon(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{6, []int{1, 2, 3}},
		{144, []int{3, 7, 4, 5}},
		{13, []int{1, 3, 1, 4, 1, 5}},
	}

	for _, table := range tables {
		got := minScoreTriangulation(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
