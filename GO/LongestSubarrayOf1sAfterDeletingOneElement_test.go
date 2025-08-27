/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLongestSubarrayOf1sAfterDeletingOneElement
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLongestSubarrayOf1sAfterDeletingOneElement(t *testing.T) {
	tables := []struct {
		want int
		word []int
	}{
		{3, []int{1, 1, 0, 1}},
		{5, []int{0, 1, 1, 1, 0, 1, 1, 0, 1}},
		{2, []int{1, 1, 1}},
	}

	for _, table := range tables {
		got := longestSubarray2(table.word)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
