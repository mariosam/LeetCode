/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestReverseBits
 */
package GO

import (
	"reflect"
	"testing"
)

func TestReverseBits(t *testing.T) {
	tables := []struct {
		want int
		val  int
	}{
		{964176192, 43261596},
		{1073741822, 2147483644},
	}

	for _, table := range tables {
		got := reverseBits(table.val)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
