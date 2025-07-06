/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindTheKthCharacterInStringGameI
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindTheKthCharacterInStringGameI(t *testing.T) {
	tables := []struct {
		want byte
		k    int
	}{
		{'b', 5},
		{'c', 10},
	}

	for _, table := range tables {
		got := kthCharacter(table.k)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %b but the return was this: %b", table.want, got)
		}
	}
}
