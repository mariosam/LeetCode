/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLongestSubarrayWithMaximumBitwiseAND
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLongestSubarrayWithMaximumBitwiseAND(t *testing.T) {
	tables := []struct {
		want int
		word []int
	}{
		{2, []int{1, 2, 3, 3, 2, 2}},
		{1, []int{1, 2, 3, 4}},
	}

	for _, table := range tables {
		got := longestSubarray(table.word)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
