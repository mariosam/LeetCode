/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SumOfAllSubsetXORTotalsTest {

    @Test
	public void testSumOfAllSubsetXORTotals() throws Exception {
        //Test 1
        int want = 6;
        int got = SumOfAllSubsetXORTotals.subsetXORSum( new int[]{1,3} );
        assertEquals(want, got);
        //Test 2
        want = 28;
        got = SumOfAllSubsetXORTotals.subsetXORSum( new int[]{5,1,6} );
        assertEquals(want, got);
        //Test 3
        want = 480;
        got = SumOfAllSubsetXORTotals.subsetXORSum( new int[]{3,4,5,6,7,8} );
        assertEquals(want, got);
	}

}
