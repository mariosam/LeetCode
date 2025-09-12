/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNumberOfPeopleAwareOfSecret
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNumberOfPeopleAwareOfSecret(t *testing.T) {
	tables := []struct {
		want int
		n    int
		goal int
		k    int
	}{
		{5, 6, 2, 4},
		{6, 4, 1, 3},
	}

	for _, table := range tables {
		got := peopleAwareOfSecret(table.n, table.goal, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
