/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberOfSubarraysWithOddSumTest {

    @Test
	public void testNumberOfSubarraysWithOddSum() throws Exception {
        //Test 1
        int want = 4;
        int got = NumberOfSubarraysWithOddSum.numOfSubarrays( new int[]{1,3,5} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = NumberOfSubarraysWithOddSum.numOfSubarrays( new int[]{2,4,6} );
        assertEquals(want, got);
        //Test 3
        want = 16;
        got = NumberOfSubarraysWithOddSum.numOfSubarrays( new int[]{1,2,3,4,5,6,7} );
        assertEquals(want, got);
	}

}
