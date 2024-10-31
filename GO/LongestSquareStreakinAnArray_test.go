/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLongestSquareStreakinAnArray
 */
package GO

import (
	"reflect"
	"testing"
)

func LongestSquareStreakinAnArray(t *testing.T) {
	tables := []struct {
		want int
		word []int
	}{
		{3, []int{4, 3, 6, 16, 8, 2}},
		{-1, []int{2, 3, 5, 6, 7}},
	}

	for _, table := range tables {
		got := longestSquareStreak(table.word)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
