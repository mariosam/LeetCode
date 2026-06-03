/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestDestroyingAsteroids
 */
package GO

import (
	"reflect"
	"testing"
)

func TestDestroyingAsteroids(t *testing.T) {
	tables := []struct {
		want      bool
		mass      int
		asteroids []int
	}{
		{true, 10, []int{3, 9, 19, 5, 21}},
		{false, 5, []int{4, 9, 23, 4}},
	}

	for _, table := range tables {
		got := asteroidsDestroyed(table.mass, table.asteroids)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
