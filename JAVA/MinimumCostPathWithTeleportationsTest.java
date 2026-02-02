/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumCostPathWithTeleportationsTest {

    @Test
	public void testMinimumCostPathWithTeleportations() throws Exception {
        //Test 1
        long want = 7;
        long got =  MinimumCostPathWithTeleportations.minCost( new int[][]{{1,3,3},{2,5,4},{4,3,5}}, 2 );
        assertEquals(want, got);
        //Test 2
        want = 9;
        got =  MinimumCostPathWithTeleportations.minCost( new int[][]{{1,2},{2,3},{3,4}}, 1 );
        assertEquals(want, got);
	}

}
