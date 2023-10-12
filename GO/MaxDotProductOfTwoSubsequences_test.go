/**
 * @version GO 1.21.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaxDotProductOfTwoSubsequences
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaxDotProductOfTwoSubsequences(t *testing.T) {
	tables := []struct {
		want int
		m1   []int
		m2   []int
	}{
		{18, []int{2, 1, -2, 5}, []int{3, 0, -6}},
		{21, []int{3, -2}, []int{2, -6, 7}},
		{-1, []int{-1, -1}, []int{1, 1}},
	}

	for _, table := range tables {
		got := maxDotProduct(table.m1, table.m2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
