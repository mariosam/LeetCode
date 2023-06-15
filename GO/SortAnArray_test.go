/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSortAnArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSortAnArray(t *testing.T) {
	tables := []struct {
		want []int
		val  []int
	}{
		{[]int{1, 2, 3, 5}, []int{5, 2, 3, 1}},
		{[]int{5, 1, 1, 2, 0, 0}, []int{0, 0, 1, 1, 2, 5}},
	}

	for _, table := range tables {
		got := sortArray(table.val)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
