/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumTimeToMakeRopeColorfulTest {

    @Test
	public void testMinimumTimeToMakeRopeColorful() throws Exception {
        //Test 1
        long want = 3;
        long got = MinimumTimeToMakeRopeColorful.minCost( "abaac", new int[]{1,2,3,4,5} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = MinimumTimeToMakeRopeColorful.minCost( "abc", new int[]{1,2,3} );
        assertEquals(want, got);
        //Test 3
        want = 2;
        got = MinimumTimeToMakeRopeColorful.minCost( "aabaa", new int[]{1,2,3,4,1} );
        assertEquals(want, got);
	}

}
