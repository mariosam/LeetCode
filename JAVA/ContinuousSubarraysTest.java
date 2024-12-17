/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ContinuousSubarraysTest {

    @Test
	public void testContinuousSubarrays() throws Exception {
        //Test 1
        long want = 8;
        long got =  ContinuousSubarrays.continuousSubarrays( new int[]{5,4,2,4} );
        assertEquals(want, got);
        //Test 2
        want = 6;
        got =  ContinuousSubarrays.continuousSubarrays( new int[]{1,2,3} );
        assertEquals(want, got);
	}

}
