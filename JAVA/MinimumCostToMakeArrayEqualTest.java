/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumCostToMakeArrayEqualTest {

    @Test
	public void testMinimumCostToMakeArrayEqual() throws Exception {
        //Test 1
        long want = 8;
        long got =  MinimumCostToMakeArrayEqual.minCost( new int[]{1,3,5,2}, new int[]{2,3,1,14} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got =  MinimumCostToMakeArrayEqual.minCost( new int[]{2,2,2,2,2}, new int[]{4,2,8,1,3} );
        assertEquals(want, got);
	}

}
