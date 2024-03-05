/**
 * @version GO 1.22.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMaximumOddBinaryNumber
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMaximumOddBinaryNumber(t *testing.T) {
	tables := []struct {
		want string
		word string
	}{
		{"001", "010"},
		{"1001", "0101"},
	}

	for _, table := range tables {
		got := maximumOddBinaryNumber(table.word)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
