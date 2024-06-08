/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class HandOfStraightsTest {

    @Test
	public void testHandOfStraights() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = HandOfStraights.isNStraightHand( new int[]{1,2,3,6,2,3,4,7,8}, 3 );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = HandOfStraights.isNStraightHand( new int[]{1,2,3,4,5}, 4 );
        assertEquals(want, got);
	}

}
