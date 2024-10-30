/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LongestSquareStreakinAnArrayTest {

    @Test
	public void testLongestSquareStreakinAnArray() throws Exception {
        //Test 1
        int want = 3;
        int got = LongestSquareStreakinAnArray.longestSquareStreak( new int[]{4,3,6,16,8,2} );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got = LongestSquareStreakinAnArray.longestSquareStreak( new int[]{2,3,5,6,7} );
        assertEquals(want, got);
	}

}
