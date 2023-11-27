/**
 * @version GO 1.21.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestKthSymbolinGrammar
 */
package GO

import (
	"reflect"
	"testing"
)

func TestKthSymbolinGrammar(t *testing.T) {
	tables := []struct {
		want int
		n    int
		k    int
	}{
		{0, 1, 1},
		{0, 2, 1},
		{1, 2, 2},
	}

	for _, table := range tables {
		got := kthGrammar(table.n, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
