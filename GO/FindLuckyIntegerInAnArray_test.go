/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindLuckyIntegerInAnArray
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindLuckyIntegerInAnArray(t *testing.T) {
	tables := []struct {
		want int
		k    []int
	}{
		{2, []int{2, 2, 3, 4}},
		{3, []int{1, 2, 2, 3, 3, 3}},
		{-1, []int{2, 2, 2, 3, 3}},
	}

	for _, table := range tables {
		got := findLucky(table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %b but the return was this: %b", table.want, got)
		}
	}
}
