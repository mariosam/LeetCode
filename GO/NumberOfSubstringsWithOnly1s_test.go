/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNumberOfSubstringsWithOnly1s
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNumberOfSubstringsWithOnly1s(t *testing.T) {
	tables := []struct {
		want int
		s    string
	}{
		{9, "0110111"},
		{2, "101"},
		{21, "111111"},
	}

	for _, table := range tables {
		got := numSub(table.s)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
