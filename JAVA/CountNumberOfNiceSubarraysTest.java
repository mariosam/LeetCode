/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountNumberOfNiceSubarraysTest {

    @Test
	public void testCountNumberOfNiceSubarrays() throws Exception {
        //Test 1
        int want = 2;
        int got = CountNumberOfNiceSubarrays.numberOfSubarrays( new int[]{1,1,2,1,1}, 3 );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = CountNumberOfNiceSubarrays.numberOfSubarrays( new int[]{2,4,6}, 1 );
        assertEquals(want, got);
        //Test 3
        want = 16;
        got = CountNumberOfNiceSubarrays.numberOfSubarrays( new int[]{2,2,2,1,2,2,1,2,2,2}, 2 );
        assertEquals(want, got);
	}

}
