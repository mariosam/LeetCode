/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestConstructUniformParityArrayI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestConstructUniformParityArrayI(t *testing.T) {
	tables := []struct {
		want bool
		nums []int
	}{
		{true, []int{2, 3}},
		{true, []int{4, 6}},
	}

	for _, table := range tables {
		got := uniformArray(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
