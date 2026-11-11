/**
 * @version GO 1.27.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindTheDistanceValueBetweenTwoArrays
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindTheDistanceValueBetweenTwoArrays(t *testing.T) {
	tables := []struct {
		want int
		arr1 []int
		arr2 []int
		d    int
	}{
		{2, []int{4, 5, 8}, []int{10, 9, 1, 8}, 2},
		{2, []int{1, 4, 2, 3}, []int{-4, -3, 6, 10, 20, 30}, 3},
		{1, []int{2, 1, 100, 3}, []int{-5, -2, 10, -3, 7}, 6},
	}

	for _, table := range tables {
		got := findTheDistanceValue(table.arr1, table.arr2, table.d)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
