/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestKRadiusSubarrayAverages
 */
package GO

import (
	"reflect"
	"testing"
)

func TestKRadiusSubarrayAverages(t *testing.T) {
	tables := []struct {
		want   []int
		nums   []int
		target int
	}{
		{[]int{-1, -1, -1, 5, 4, 4, -1, -1, -1}, []int{7, 4, 3, 9, 1, 8, 5, 2, 6}, 3},
		{[]int{100000}, []int{100000}, 0},
		{[]int{-1}, []int{8}, 100000},
	}

	for _, table := range tables {
		got := getAverages(table.nums, table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
