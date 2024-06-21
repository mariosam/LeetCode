/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSumOfSquareNumbers
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSumOfSquareNumbers(t *testing.T) {
	tables := []struct {
		want bool
		k    int
	}{
		{true, 5},
		{false, 3},
	}

	for _, table := range tables {
		got := judgeSquareSum(table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
