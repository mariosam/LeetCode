/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindAllKDistantIndicesInAnArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindAllKDistantIndicesInAnArray(t *testing.T) {
	tables := []struct {
		want  []int
		nums []int
		key int
		k int
	}{
		{[]int{1,2,3,4,5,6}, []int{3,4,9,1,3,9,5}, 9, 1},
		{[]int{0,1,2,3,4}, []int{2,2,2,2,2}, 2, 2},

	for _, table := range tables {
		got := findKDistantIndices(table.nums, table.key, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
