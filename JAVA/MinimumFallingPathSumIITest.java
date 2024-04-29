/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumFallingPathSumIITest {

    @Test
	public void testMinimumFallingPathSumII() throws Exception {
        //Test 1
        int want = 13;
        int got =  MinimumFallingPathSumII.minFallingPathSum( new int[][]{{1,2,3},{4,5,6},{7,8,9}} );
        assertEquals(want, got);
        //Test 2
        want = 7;
        got =  MinimumFallingPathSumII.minFallingPathSum( new int[][]{{7}} );
        assertEquals(want, got);
	}

}
