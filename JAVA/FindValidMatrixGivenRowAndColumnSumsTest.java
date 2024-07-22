/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class FindValidMatrixGivenRowAndColumnSumsTest {

    @Test
	public void testFindValidMatrixGivenRowAndColumnSums() throws Exception {
        //Test 1
        int[][] want = new int[][]{{3,0},{1,7}};
        int[][] got = FindValidMatrixGivenRowAndColumnSums.restoreMatrix( new int[]{3, 8}, new int[]{4, 7} );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[][]{{5,0,0},{3,4,0},{0,2,8}};
        got = FindValidMatrixGivenRowAndColumnSums.restoreMatrix( new int[]{5,7,10}, new int[]{8,6,8} );
        assertArrayEquals(want, got);
	}

}
