/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumDifferenceBetweenAdjacentElementsInACircularArrayTest {

    @Test
	public void testMaximumDifferenceBetweenAdjacentElementsInACircularArray() throws Exception {
        //Test 1
        int want = 3;
        int got = MaximumDifferenceBetweenAdjacentElementsInACircularArray.maxAdjacentDistance( new int[]{1, 2, 4} );
        assertEquals(want, got);
        //Test 2
        want = 5;
        got = MaximumDifferenceBetweenAdjacentElementsInACircularArray.maxAdjacentDistance( new int[]{-5, -10, -5} );
        assertEquals(want, got);
	}

}
