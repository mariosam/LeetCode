/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestMinimumNumberOfPushesToTypeWordI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestMinimumNumberOfPushesToTypeWordI(t *testing.T) {
	tables := []struct {
		want int
		s    string
	}{
		{5, "abcde"},
		{12, "xycdefghij"},
	}

	for _, table := range tables {
		got := minimumPushes(table.s)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
