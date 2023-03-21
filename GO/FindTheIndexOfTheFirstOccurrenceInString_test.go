/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFirstMissingPositive
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindTheIndexOfTheFirstOccurrenceInStringTest(t *testing.T) {
	tables := []struct {
		want int
		word string
		look string
	}{
		{0, "sadbutsad", "sad"},
		{-1, "leetcode", "leeto"},
	}

	for _, table := range tables {
		got := strStr(table.word, table.look)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
