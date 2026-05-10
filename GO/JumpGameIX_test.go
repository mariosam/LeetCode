/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestJumpGameIX
 */
package GO

import (
	"reflect"
	"testing"
)

func TestJumpGameIX(t *testing.T) {
	tables := []struct {
		want []int
		nums []int
	}{
		{[]int{2, 2, 3}, []int{2, 1, 3}},
		{[]int{3, 3, 3}, []int{2, 3, 1}},
	}

	for _, table := range tables {
		got := maxValue(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %v but the return was this: %v", table.want, got)
		}
	}
}
