/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class UniquePathsIITest {

    @Test
	public void testUniquePathsII() throws Exception {
        //Test 1
        int want = 2;
        int got = UniquePathsII.uniquePathsWithObstacles( new int[][]{{0,0,0},{0,1,0},{0,0,0}} );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = UniquePathsII.uniquePathsWithObstacles( new int[][]{{0,1},{0,0}} );
        assertEquals(want, got);
	}

}
