/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestRemoveSubFoldersFromTheFilesystem
 */
package GO

import (
	"reflect"
	"testing"
)

func TestRemoveSubFoldersFromTheFilesystem(t *testing.T) {
	tables := []struct {
		want []string
		str  []string
	}{
		{[]string{"/a", "/c/d", "/c/f"}, []string{"/a", "/a/b", "/c/d", "/c/d/e", "/c/f"}},
		{[]string{"/a"}, []string{"/a", "/a/b/c", "/a/b/d"}},
		{[]string{"/a/b/c", "/a/b/ca", "/a/b/d"}, []string{"/a/b/c", "/a/b/ca", "/a/b/d"}},
	}

	for _, table := range tables {
		got := removeSubfolders(table.str)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
