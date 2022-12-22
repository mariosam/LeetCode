/**
 * @version GO 1.19.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSingleNumber
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSingleNumber(t *testing.T) {
	tables := []struct {
		want int
		nums []int
	}{
		{1, []int{2, 2, 1}},
		{4, []int{4, 1, 2, 1, 2}},
		{1, []int{1}},
	}

	for _, table := range tables {
		got := singleNumber(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
