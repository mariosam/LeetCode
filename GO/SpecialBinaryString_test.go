/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestSpecialBinaryString
 */
package GO

import (
	"reflect"
	"testing"
)

func TestSpecialBinaryString(t *testing.T) {
	tables := []struct {
		want string
		nums string
	}{
		{"11100100", "11011000"},
		{"10", "10"},
	}

	for _, table := range tables {
		got := makeLargestSpecial(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
