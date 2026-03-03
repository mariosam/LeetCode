/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestConcatenationOfConsecutiveBinaryNumbers
 */
package GO

import (
	"reflect"
	"testing"
)

func TestConcatenationOfConsecutiveBinaryNumbers(t *testing.T) {
	tables := []struct {
		want int
		n    int
	}{
		{1, 1},
		{27, 3},
		{505379714, 12},
	}

	for _, table := range tables {
		got := concatenatedBinary(table.n)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
