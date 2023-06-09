/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSignOfTheProductOfAnArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSignOfTheProductOfAnArray(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{1, []int{-1, -2, -3, -4, 3, 2, 1}},
		{0, []int{1, 5, 0, 2, -3}},
		{-1, []int{-1, 1, -1, 1, -1}},
	}

	for _, table := range tables {
		got := arraySign(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
