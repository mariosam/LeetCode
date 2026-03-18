/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumNumberOfSecondsToMakeMountainHeightZeroTest {

    @Test
	public void testMinimumNumberOfSecondsToMakeMountainHeightZero() throws Exception {
        //Test 1
        long want = 3;
        long got =  MinimumNumberOfSecondsToMakeMountainHeightZero.minNumberOfSeconds( 4, new int[]{2, 1, 1} );
        assertEquals(want, got);
        //Test 2
        want = 12;
        got =  MinimumNumberOfSecondsToMakeMountainHeightZero.minNumberOfSeconds( 10, new int[]{3, 2, 2, 4} );
        assertEquals(want, got);
        //Test 3
        want = 15;
        got =  MinimumNumberOfSecondsToMakeMountainHeightZero.minNumberOfSeconds( 5, new int[]{1} );
        assertEquals(want, got);
	}

}
