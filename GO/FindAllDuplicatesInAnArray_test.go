/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindAllDuplicatesInAnArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindAllDuplicatesInAnArray(t *testing.T) {
	tables := []struct {
		want  []int
		nums1 []int
	}{
		{[]int{3, 2}, []int{4, 3, 2, 7, 8, 2, 3, 1}},
		{[]int{1}, []int{1, 1, 2}},
		{[]int{}, []int{1}}}

	for _, table := range tables {
		got := findDuplicates(table.nums1)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
