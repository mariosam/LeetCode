/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumCostPathWithEdgeReversalsTest {

    @Test
	public void testMinimumCostPathWithEdgeReversals() throws Exception {
        //Test 1
        int want = 5;
        int got =  MinimumCostPathWithEdgeReversals.minCost( 4, new int[][]{{0,1,3},{3,1,1},{2,3,4},{0,2,2}} );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got =  MinimumCostPathWithEdgeReversals.minCost( 4, new int[][]{{0,2,1},{2,1,1},{1,3,1},{2,3,3}});
        assertEquals(want, got);
	}

}
