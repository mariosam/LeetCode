/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestDistributeCandiesAmongChildrenII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestDistributeCandiesAmongChildrenII(t *testing.T) {
	tables := []struct {
		want  int64
		n     int
		limit int
	}{
		{3, 5, 2},
		{10, 3, 3},
	}

	for _, table := range tables {
		got := distributeCandies(table.n, table.limit)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
