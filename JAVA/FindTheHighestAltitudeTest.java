/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindTheHighestAltitudeTest {

    @Test
	public void testFindTheHighestAltitude() throws Exception {
        //Test 1
        int want = 1;
        int got = FindTheHighestAltitude.largestAltitude( new int[]{-5,1,5,0,-7} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = FindTheHighestAltitude.largestAltitude( new int[]{-4,-3,-2,-1,4,3,2} );
        assertEquals(want, got);
	}

}
