/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLongestNiceSubarray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLongestNiceSubarray(t *testing.T) {
	tables := []struct {
		want int
		word []int
	}{
		{3, []int{1, 3, 8, 48, 10}},
		{1, []int{3, 1, 5, 11, 13}},
	}

	for _, table := range tables {
		got := longestNiceSubarray(table.word)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
