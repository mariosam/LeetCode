/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindTheTownJudge
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindTheTownJudge(t *testing.T) {
	tables := []struct {
		want int
		n    int
		nums [][]int
	}{
		{2, 2, [][]int{{1, 2}}},
		{3, 3, [][]int{{1, 3}, {2, 3}}},
		{-1, 3, [][]int{{1, 3}, {2, 3}, {3, 1}}},
	}

	for _, table := range tables {
		got := findJudge(table.n, table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
