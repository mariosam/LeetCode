/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestAddingSpacesToString
 */
package GO

import (
	"reflect"
	"testing"
)

func TestAddingSpacesToString(t *testing.T) {
	tables := []struct {
		want   string
		s      string
		target []int
	}{
		{"Leetcode Helps Me Learn", "LeetcodeHelpsMeLearn", []int{8, 13, 15}},
		{"i code in py thon", "icodeinpython", []int{1, 5, 7, 9}},
		{" s p a c i n g", "spacing", []int{0, 1, 2, 3, 4, 5, 6}},
	}

	for _, table := range tables {
		got := addSpaces(table.s, table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
