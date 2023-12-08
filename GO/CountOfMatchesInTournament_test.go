/**
 * @version GO 1.21.4
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestCountOfMatchesInTournament
 */
package GO

import (
	"reflect"
	"testing"
)

func TestCountOfMatchesInTournament(t *testing.T) {
	tables := []struct {
		want int
		nums int
	}{
		{6, 7},
		{13, 14},
	}

	for _, table := range tables {
		got := numberOfMatches(table.nums)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
