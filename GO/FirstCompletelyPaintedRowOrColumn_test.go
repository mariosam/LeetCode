/**
 * @version GO 1.23.5
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ go test -timeout 999999s -run TestFirstCompletelyPaintedRowOrColumn
 */
 package GO

 import (
	 "reflect"
	 "testing"
 )
 
 func TestFirstCompletelyPaintedRowOrColumn(t *testing.T) {
	 tables := []struct {
		 want  int
		 words []int
		 chars [][]int
	 }{
		 {2, []int{1,3,4,2}, [][]int{{1,4},{2,3}}},
		 {3, []int{2,8,7,4,,3,5,6,9}, [][]int{{3,2,5},{1,4,6},{8,7,9}}},
	 }
 
	 for _, table := range tables {
		 got := firstCompleteIndex(table.words, table.chars)
 
		 if !reflect.DeepEqual(got, table.want) {
			 t.Errorf("Waiting for this %d but the return was this: %d", table.want, got)
		 }
	 }
 }
 
