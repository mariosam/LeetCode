/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFruitIntoBaskets
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFruitIntoBaskets(t *testing.T) {
	tables := []struct {
		want int
		w1   []int
	}{
		{3, []int{1, 2, 1}},
		{3, []int{0, 1, 2, 2}},
		{4, []int{1, 2, 3, 2, 2}},
	}

	for _, table := range tables {
		got := totalFruit(table.w1)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
