/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumScoreFromGridOperationsTest {

    @Test
	public void testMaximumScoreFromGridOperations() throws Exception {
        //Test 1
        long want = 11;
        long got = MaximumScoreFromGridOperations.maximumScore(new int[][]{{0,0,0,0,0},{0,0,3,0,0},{0,1,0,0,0},{5,0,0,3,0},{0,0,0,0,2}});
        assertEquals(want, got, 0);
        //Test 2
        want = 94;
        got = MaximumScoreFromGridOperations.maximumScore(new int[][]{{10,9,0,0,15},{7,1,0,8,0},{5,20,0,11,0},{0,0,0,1,2},{8,12,1,10,3}});
        assertEquals(want, got, 0);
	}

}
