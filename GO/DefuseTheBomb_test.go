/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestDefuseTheBomb
 */
package GO

import (
	"reflect"
	"testing"
)

func TestDefuseTheBomb(t *testing.T) {
	tables := []struct {
		want []int
		nums []int
		k    int
	}{
		{[]int{12, 10, 16, 13}, []int{5, 7, 1, 4}, 3},
		{[]int{0, 0, 0, 0}, []int{1, 2, 3, 4}, 0},
		{[]int{12, 5, 6, 13}, []int{2, 4, 9, 3}, -2},
	}

	for _, table := range tables {
		got := decrypt(table.nums, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
