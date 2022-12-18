/**
 * @version GO 1.19.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestValidPalindrome
 */
package GO

import (
	"reflect"
	"testing"
)

func TestValidPalindrome(t *testing.T) {
	tables := []struct {
		want bool
		str  string
	}{
		{true, "A man, a plan, a canal: Panama"},
		{false, "race a car"},
		{true, " "},
		{true, "A man, a plan, a canal -- Panama"},
		{false, "0P"},
	}

	for _, table := range tables {
		got := isPalindromeString(table.str)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t to %s", table.want, got, table.str)
		}
	}
}
