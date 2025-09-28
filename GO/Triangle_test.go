/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestTriangle
 */
package GO

import (
	"reflect"
	"testing"
)

func TestTriangle(t *testing.T) {
	tables := []struct {
		want    int
		tri [][]int
	}{
		{11, [][]int{{2},{3,4},{6,5,7},{4,1,8,3}}},
		{-10, [][]int{{-10}}},
	}

	for _, table := range tables {
		got := minimumTotal(table.tri)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
