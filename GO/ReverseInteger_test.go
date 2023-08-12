/**
 * @version GO 1.20.1
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestReverseInteger
 */
package GO

import (
	"reflect"
	"testing"
)

func TestReverseInteger(t *testing.T) {
	tables := []struct {
		want int
		val  int
	}{
		{321, 123},
		{-321, -123},
		{21, 120},
	}

	for _, table := range tables {
		got := reverse(table.val)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
