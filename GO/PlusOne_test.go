/**
 * @version GO 1.19.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestPlusOne
 */
package GO

import (
	"reflect"
	"testing"
)

func TestPlusOne(t *testing.T) {
	tables := []struct {
		want []int
		nums []int
	}{
		{[]int{1, 2, 4}, []int{1, 2, 3}},
		{[]int{4, 3, 2, 2}, []int{4, 3, 2, 1}},
		{[]int{1, 0}, []int{9}},
		{[]int{5, 0, 0, 0}, []int{4, 9, 9, 9}},
		{[]int{7, 2, 8, 5, 0, 9, 1, 2, 9, 5, 3, 6, 6, 7, 3, 2, 8, 4, 3, 7, 9, 5, 7, 7, 4, 7, 4, 9, 4, 7, 0, 1, 1, 1, 7, 4, 0, 0, 7}, []int{7, 2, 8, 5, 0, 9, 1, 2, 9, 5, 3, 6, 6, 7, 3, 2, 8, 4, 3, 7, 9, 5, 7, 7, 4, 7, 4, 9, 4, 7, 0, 1, 1, 1, 7, 4, 0, 0, 6}},
		{[]int{1, 0, 0, 0}, []int{9, 9, 9}},
	}

	for _, table := range tables {
		got := plusOne(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
