/**
 * @version GO 1.21.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestNumberOfMusicPlaylists
 */
package GO

import (
	"reflect"
	"testing"
)

func TestNumberOfMusicPlaylists(t *testing.T) {
	tables := []struct {
		want int
		n    int
		goal int
		k    int
	}{
		{6, 3, 3, 1},
		{6, 2, 3, 0},
		{2, 2, 3, 1},
	}

	for _, table := range tables {
		got := numMusicPlaylists(table.n, table.goal, table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
