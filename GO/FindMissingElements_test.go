/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindMissingElements
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindMissingElements(t *testing.T) {
	tables := []struct {
		want  []int
		rools []int
	}{
		{[]int{3}, []int{1, 4, 2, 5}},
		{[]int{}, []int{7, 8, 6, 9}},
		{[]int{2, 3, 4}, []int{5, 1}}}

	for _, table := range tables {
		got := findMissingElements(table.rools)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
