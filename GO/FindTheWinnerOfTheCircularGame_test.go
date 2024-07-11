/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindTheWinnerOfTheCircularGame
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindTheWinnerOfTheCircularGame(t *testing.T) {
	tables := []struct {
		want  int
		words int
		chars int
	}{
		{3, 5, 2},
		{1, 6, 5},
	}

	for _, table := range tables {
		got := findTheWinner(table.words, table.chars)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
