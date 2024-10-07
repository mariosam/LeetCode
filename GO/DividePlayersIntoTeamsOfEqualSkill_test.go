/**
 * @version GO 1.22.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestDividePlayersIntoTeamsOfEqualSkill
 */
package GO

import (
	"reflect"
	"testing"
)

func TestDividePlayersIntoTeamsOfEqualSkill(t *testing.T) {
	tables := []struct {
		want  int64
		word1 []int
	}{
		{22, []int{3, 2, 5, 1, 3, 4}},
		{12, []int{3, 4}},
		{-1, []int{1, 1, 2, 3}},
	}

	for _, table := range tables {
		got := dividePlayers(table.word1)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
