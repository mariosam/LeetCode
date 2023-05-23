/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountSubarraysWithFixedBoundsTest {

    @Test
	public void testCountSubarraysWithFixedBounds() throws Exception {
        //Test 1
        long want = 2;
        long got = CountSubarraysWithFixedBounds.countSubarrays( new int[]{1, 3, 5, 2, 7, 5}, 1, 5 );
        assertEquals(want, got);
        //Test 2
        want = 10;
        got = CountSubarraysWithFixedBounds.countSubarrays( new int[]{1, 1, 1, 1}, 1, 1 );
        assertEquals(want, got);
	}

}
