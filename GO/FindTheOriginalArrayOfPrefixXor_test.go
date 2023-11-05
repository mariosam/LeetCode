/**
 * @version GO 1.21.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindTheOriginalArrayOfPrefixXor
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindTheOriginalArrayOfPrefixXor(t *testing.T) {
	tables := []struct {
		want []int
		nums []int
	}{
		{[]int{5, 7, 2, 3, 2}, []int{5, 2, 0, 3, 1}},
		{[]int{13}, []int{13}},
	}

	for _, table := range tables {
		got := findArray(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
