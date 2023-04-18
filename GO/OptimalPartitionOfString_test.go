/**
 * @version GO 1.20.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestOptimalPartitionOfString
 */
package GO

import (
	"reflect"
	"testing"
)

func TestOptimalPartitionOfString(t *testing.T) {
	tables := []struct {
		want int
		val  string
	}{
		{4, "abacaba"},
		{6, "ssssss"},
	}

	for _, table := range tables {
		got := partitionString(table.val)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
