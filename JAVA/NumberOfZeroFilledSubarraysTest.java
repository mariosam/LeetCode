/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberOfZeroFilledSubarraysTest {

    @Test
	public void testNumberOfZeroFilledSubarrays() throws Exception {
        //Test 1
        long want = 6;
        long got = NumberOfZeroFilledSubarrays.zeroFilledSubarray( new int[]{1,3,0,0,2,0,0,4} );
        assertEquals(want, got);
        //Test 2
        want = 9;
        got = NumberOfZeroFilledSubarrays.zeroFilledSubarray( new int[]{0,0,0,2,0,0} );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = NumberOfZeroFilledSubarrays.zeroFilledSubarray( new int[]{2,10,2019} );
        assertEquals(want, got);
	}

}
