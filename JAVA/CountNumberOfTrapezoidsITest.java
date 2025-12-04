/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountNumberOfTrapezoidsITest {

    @Test
	public void testCountNumberOfTrapezoidsI() throws Exception {
        //Test 1
        int want = 3;
        int got = CountNumberOfTrapezoidsI.countTrapezoids( new int[][] { {1,0}, {2,0}, {3,0}, {2,2}, {3,2} } );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = CountNumberOfTrapezoidsI.countTrapezoids( new int[][] { {0,0}, {1,0}, {0,1}, {2,1} } );
        assertEquals(want, got);
	}

}
