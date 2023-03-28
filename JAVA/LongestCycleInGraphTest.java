/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LongestCycleInGraphTest {

    @Test
	public void testLongestCycleInGraph() throws Exception {
        //Test 1
        int want = 3;
        int got = LongestCycleInGraph.longestCycle( new int[]{3,3,4,2,3} );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got = LongestCycleInGraph.longestCycle( new int[]{2,-1,3,1} );
        assertEquals(want, got);
	}

}
