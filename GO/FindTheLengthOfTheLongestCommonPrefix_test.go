/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindTheLengthOfTheLongestCommonPrefix
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindTheLengthOfTheLongestCommonPrefix(t *testing.T) {
	tables := []struct {
		want int
		word []int
		look []int
	}{
		{3, []int{1, 10, 100}, []int{1000}},
		{0, []int{1, 2, 3}, []int{4, 4, 4}},
	}

	for _, table := range tables {
		got := longestCommonPrefix2(table.word, table.look)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
