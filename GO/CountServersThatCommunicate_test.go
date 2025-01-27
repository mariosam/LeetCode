/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountServersThatCommunicate
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountServersThatCommunicate(t *testing.T) {
	tables := []struct {
		want int
		nums [][]int
	}{
		{0, [][]int{{1, 0}, {0, 1}}},
		{3, [][]int{{1, 0}, {1, 1}}},
		{4, [][]int{{1, 1, 0, 0}, {0, 0, 1, 0}, {0, 0, 1, 0}, {0, 0, 0, 1}}},
	}

	for _, table := range tables {
		got := countServers(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
