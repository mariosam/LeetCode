/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLongestUnequalAdjacentGroupsSubsequenceII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLongestUnequalAdjacentGroupsSubsequenceII(t *testing.T) {
	tables := []struct {
		want  []string
		nums1 []string
		m     []int
	}{
		{[]string{"bab", "cab"}, []string{"bab", "dab", "cab"}, []int{1, 2, 2}},
		{[]string{"a", "b", "c", "d"}, []string{"a", "b", "c", "d"}, []int{1, 2, 3, 4}},
	}

	for _, table := range tables {
		got := getWordsInLongestSubsequence(table.nums1, table.m)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
