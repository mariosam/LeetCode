/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumDifferenceBetweenIncreasingElementsTest {

    @Test
	public void testMaximumDifferenceBetweenIncreasingElements() throws Exception {
        //Test 1
        int want = 4;
        int got = MaximumDifferenceBetweenIncreasingElements.maximumDifference( new int[]{7,1,5,4} );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got = MaximumDifferenceBetweenIncreasingElements.maximumDifference( new int[]{9,4,3,2} );
        assertEquals(want, got);
        //Test 3
        want = 9;
        got = MaximumDifferenceBetweenIncreasingElements.maximumDifference( new int[]{1,5,2,10} );
        assertEquals(want, got);
	}

}
