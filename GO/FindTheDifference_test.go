/**
 * @version GO 1.21.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFindTheDifference
 */
package GO

import (
	"reflect"
	"testing"
)

func TestFindTheDifference(t *testing.T) {
	tables := []struct {
		want byte
		s    string
		t    string
	}{
		{'e', "abcd", "abcde"},
		{'y', "", "y"},
	}

	for _, table := range tables {
		got := findTheDifference(table.s, table.t)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %b but the return was this: %b", table.want, got)
		}
	}
}
