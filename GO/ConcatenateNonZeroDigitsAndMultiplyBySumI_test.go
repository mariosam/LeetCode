/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestConcatenateNonZeroDigitsAndMultiplyBySumI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestConcatenateNonZeroDigitsAndMultiplyBySumI(t *testing.T) {
	tables := []struct {
		want int64
		n    int
	}{
		{12340, 10203004},
		{1, 1000},
	}

	for _, table := range tables {
		got := sumAndMultiply(table.n)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
