/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumPathSumTest {

    @Test
	public void testMinimumPathSum() throws Exception {
        //Test 1
        int want = 7;
        int got =  MinimumPathSum.minPathSum( new int[][]{{1,3,1},{1,5,1},{4,2,1}} );
        assertEquals(want, got);
        //Test 2
        want = 12;
        got =  MinimumPathSum.minPathSum( new int[][]{{1,2,3},{4,5,6}} );
        assertEquals(want, got);
	}

}
