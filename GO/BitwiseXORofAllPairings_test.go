/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestBitwiseXORofAllPairings
 */
package GO

import (
	"reflect"
	"testing"
)

func TestBitwiseXORofAllPairings(t *testing.T) {
	tables := []struct {
		want  int
		nums1 []int
		nums2 []int
	}{
		{13, []int{2, 1, 3}, []int{10, 2, 5, 0}},
		{0, []int{1, 2}, []int{3, 4}},
	}

	for _, table := range tables {
		got := xorAllNums(table.nums1, table.nums2)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
