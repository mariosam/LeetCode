/**
 * @version GO 1.20.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindSmallestLetterGreaterThanTarget
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindSmallestLetterGreaterThanTarget(t *testing.T) {
	tables := []struct {
		want    byte
		letters []byte
		target  byte
	}{
		{'c', []byte{'c', 'f', 'j'}, 'a'},
		{'f', []byte{'c', 'f', 'j'}, 'c'},
		{'x', []byte{'x', 'x', 'y', 'y'}, 'z'},
	}

	for _, table := range tables {
		got := nextGreatestLetter(table.letters, table.target)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %b but the return was this: %b", table.want, got)
		}
	}
}
