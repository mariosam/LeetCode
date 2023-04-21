/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumCostForTicketsTest {

    @Test
	public void testMinimumCostForTickets() throws Exception {
        //Test 1
        int want = 11;
        int got =  MinimumCostForTickets.mincostTickets( new int[]{1,4,6,7,8,20}, new int[]{2,7,15} );
        assertEquals(want, got);
        //Test 2
        want = 17;
        got =  MinimumCostForTickets.mincostTickets( new int[]{1,2,3,4,5,6,7,8,9,10,30,31}, new int[]{2,7,15} );
        assertEquals(want, got);
	}

}
