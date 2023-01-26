/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MatrixDiagonalSumTest {

    @Test
	public void testMatrixDiagonalSum() throws Exception {
        //Test 1
        int want = 25;
        int got = MatrixDiagonalSum.diagonalSum( new int[][]{{1,2,3},{4,5,6},{7,8,9}} );
        assertEquals(want, got);
        //Test 2
        want = 8;
        got = MatrixDiagonalSum.diagonalSum( new int[][]{{1,1,1,1},{1,1,1,1},{1,1,1,1},{1,1,1,1}} );
        assertEquals(want, got);
        //Test 3
        want = 5;
        got = MatrixDiagonalSum.diagonalSum( new int[][]{{5}} );
        assertEquals(want, got);
	}

}
