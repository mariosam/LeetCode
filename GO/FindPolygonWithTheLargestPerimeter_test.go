/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindPolygonWithTheLargestPerimeter
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindPolygonWithTheLargestPerimeter(t *testing.T) {
	tables := []struct {
		want    int64
		letters []int
	}{
		{15, []int{5, 5, 5}},
		{12, []int{1, 12, 1, 2, 5, 50, 3}},
		{-1, []int{5, 5, 50}},
	}

	for _, table := range tables {
		got := largestPerimeter(table.letters)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %b but the return was this: %b", table.want, got)
		}
	}
}
