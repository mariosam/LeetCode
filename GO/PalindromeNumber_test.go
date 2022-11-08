/**
 * @version GO 1.19.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestPalindromeNumber
 */
package GO

import (
	"reflect"
	"testing"
)

func TestPalindromeNumber(t *testing.T) {
	tables := []struct {
		want bool
		num  int
	}{
		{true, 121},
		{false, -121},
		{false, 10},
	}

	for _, table := range tables {
		got := isPalindrome(table.num)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %t but the return was this: %t", table.want, got)
		}
	}
}
