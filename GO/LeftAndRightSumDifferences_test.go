/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLeftAndRightSumDifferences
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLeftAndRightSumDifferences(t *testing.T) {
	tables := []struct {
		want []int
		nums []int
	}{
		{[]int{15, 1, 11, 22}, []int{10, 4, 8, 3}},
		{[]int{0}, []int{1}},
	}

	for _, table := range tables {
		got := leftRightDifference(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %v but the return was this: %v", table.want, got)
		}
	}
}
