/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLexicographicalNumbers
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLexicographicalNumbers(t *testing.T) {
	tables := []struct {
		want   []int
		target int
	}{
		{[]int{1, 10, 11, 12, 13, 2, 3, 4, 5, 6, 7, 8, 9}, 13},
		{[]int{1, 2}, 2},
	}

	for _, table := range tables {
		got := lexicalOrder(table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
