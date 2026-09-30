/**
 * @version GO 1.26.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestEvaluateTheBracketPairsOfString
 */
package GO

import (
	"reflect"
	"testing"
)

func TestEvaluateTheBracketPairsOfString(t *testing.T) {
	tables := []struct {
		want string
		word string
		know [][]string
	}{
		{"bobistwoyearsold", "(name)is(age)yearsold", [][]string{{"name", "bob"}, {"age", "two"}}},
		{"hi?", "hi(name)", [][]string{{"a", "b"}}},
		{"yesyesyesaaa", "(a)(a)(a)aaa", [][]string{{"a", "yes"}}},
	}

	for _, table := range tables {
		got := evaluate(table.word, table.know)

		if !reflect.DeepEqual(got, table.want) {
			t.Errorf("Waiting for this %s but the return was this: %s", table.want, got)
		}
	}
}
