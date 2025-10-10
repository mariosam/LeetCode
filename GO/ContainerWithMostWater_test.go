/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestContainerWithMostWater
 */
package GO

import (
	"reflect"
	"testing"
)

func TestContainerWithMostWater(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{49, []int{1, 8, 6, 2, 5, 4, 8, 3, 7}},
		{1, []int{1, 1}},
	}

	for _, table := range tables {
		got := maxArea(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
