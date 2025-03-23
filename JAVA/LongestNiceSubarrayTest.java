/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LongestNiceSubarrayTest {

    @Test
	public void testLongestNiceSubarray() throws Exception {
        //Test 1
        int want = 3;
        int got = LongestNiceSubarray.longestNiceSubarray( new int[]{1,3,8,48,10} );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = LongestNiceSubarray.longestNiceSubarray( new int[]{3,1,5,11,13} );
        assertEquals(want, got);
	}

}
