/**
 * @version GO 1.20.3
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestDota2Senate
 */
package GO

import (
	"reflect"
	"testing"
)

func TestDota2Senate(t *testing.T) {
	tables := []struct {
		want string
		word string
	}{
		{"Radiant", "RD"},
		{"Dire", "RDD"},
	}

	for _, table := range tables {
		got := predictPartyVictory(table.word)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
