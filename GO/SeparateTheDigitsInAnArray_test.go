/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSeparateTheDigitsInAnArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSeparateTheDigitsInAnArray(t *testing.T) {
	tables := []struct {
		want []int
		nums []int
	}{
		{[]int{1, 3, 2, 5, 8, 3, 7, 7}, []int{13, 25, 83, 77}},
		{[]int{7, 1, 3, 9}, []int{7, 1, 3, 9}},
	}

	for _, table := range tables {
		got := separateDigits(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
