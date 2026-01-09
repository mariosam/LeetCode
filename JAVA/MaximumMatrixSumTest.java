/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumMatrixSumTest {

    @Test
	public void testMaximumMatrixSum() throws Exception {
        //Test 1
        long want = 4;
        long got = MaximumMatrixSum.maxMatrixSum( new int[][]{{1,-1},{-1,1}} );
        assertEquals(want, got);
        //Test 2
        want = 16;
        got = MaximumMatrixSum.maxMatrixSum( new int[][]{{1,2,3},{-1,-2,-3},{1,2,3}} );
        assertEquals(want, got);
	}

}
