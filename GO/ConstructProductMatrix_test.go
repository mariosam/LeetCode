/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestConstructProductMatrix
 */
package GO

import (
	"reflect"
	"testing"
)

func TestConstructProductMatrix(t *testing.T) {
	tables := []struct {
		want [][]int
		nums [][]int
	}{
		{[][]int{{24, 12}, {8, 6}}, [][]int{{1, 2}, {3, 4}}},
		{[][]int{{2}, {0}, {0}}, [][]int{{12345}, {2}, {1}}},
	}

	for _, table := range tables {
		got := constructProductMatrix(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
