/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestBuildArrayFromPermutation
 */
package GO

import (
	"reflect"
	"testing"
)

func TestBuildArrayFromPermutation(t *testing.T) {
	tables := []struct {
		want  []int
		nums1 []int
	}{
		{[]int{0, 1, 2, 4, 5, 3}, []int{0, 2, 1, 5, 3, 4}},
		{[]int{4, 5, 0, 1, 2, 3}, []int{5, 0, 1, 2, 3, 4}},
	}

	for _, table := range tables {
		got := buildArray(table.nums1)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
