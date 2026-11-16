/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountNonDecreasingSubarraysAfterKOperationsTest {

    @Test
	public void testCountNonDecreasingSubarraysAfterKOperations() throws Exception {
        //Test 1
        long want = 17;
        long got = CountNonDecreasingSubarraysAfterKOperations.countNonDecreasingSubarrays( new int[]{6,3,1,2,4,4}, 7 );
        assertEquals(want, got);
        //Test 2
        want = 12;
        got = CountNonDecreasingSubarraysAfterKOperations.countNonDecreasingSubarrays( new int[]{6,3,1,3,6}, 4 );
        assertEquals(want, got);
	}

}
