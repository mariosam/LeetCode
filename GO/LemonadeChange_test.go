/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestLemonadeChange
 */
package GO

import (
	"reflect"
	"testing"
)

func TestLemonadeChange(t *testing.T) {
	tables := []struct {
		want bool
		nums []int
	}{
		{true, []int{5, 5, 5, 10, 20}},
		{false, []int{5, 5, 10, 10, 20}},
	}

	for _, table := range tables {
		got := lemonadeChange(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
