/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class SortMatrixByDiagonalsTest {

    @Test
	public void testSortMatrixByDiagonals() throws Exception {
        //Test 1
        int[][] want = {{8,2,3},{9,6,7},{4,5,1}};
        int[][] got = SortMatrixByDiagonals.sortMatrix( new int[][]{{1,7,3},{9,8,2},{4,5,6}} );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[][]{{2,1},{1,0}};
        got = SortMatrixByDiagonals.sortMatrix( new int[][]{{0,1},{1,2}} );
        assertArrayEquals(want, got);
        //Test 3
        want = new int[][]{{1}};
        got = SortMatrixByDiagonals.sortMatrix( new int[][]{{1}} );
        assertArrayEquals(want, got);
	}

}
