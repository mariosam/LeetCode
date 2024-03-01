/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSequentialDigits
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSequentialDigits(t *testing.T) {
	tables := []struct {
		want []int
		low  int
		high int
	}{
		{[]int{123, 234}, 100, 300},
		{[]int{1234, 2345, 3456, 4567, 5678, 6789, 12345}, 1000, 13000},
	}

	for _, table := range tables {
		got := sequentialDigits(table.low, table.high)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
