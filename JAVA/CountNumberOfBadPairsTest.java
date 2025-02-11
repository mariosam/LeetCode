/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountNumberOfBadPairsTest {

    @Test
	public void testCountNumberOfBadPairs() throws Exception {
        //Test 1
        long want = 5;
        long got = CountNumberOfBadPairs.countBadPairs( new int[]{4,1,3,3} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = CountNumberOfBadPairs.countBadPairs( new int[]{1,2,3,4,5} );
        assertEquals(want, got);
	}

}
