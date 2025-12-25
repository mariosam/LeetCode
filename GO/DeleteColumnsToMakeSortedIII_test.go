/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestDeleteColumnsToMakeSortedIII
 */
package GO

import (
	"reflect"
	"testing"
)

func TestDeleteColumnsToMakeSortedIII(t *testing.T) {
	tables := []struct {
		want  int
		word1 []string
	}{
		{3, []string{"babca", "bbazb"}},
		{4, []string{"edcba"}},
		{0, []string{"ghi", "def", "abc"}},
	}

	for _, table := range tables {
		got := minDeletionSize(table.word1)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		}
	}
}
