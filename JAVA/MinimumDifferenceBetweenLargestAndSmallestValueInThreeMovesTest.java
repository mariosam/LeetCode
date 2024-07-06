/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumDifferenceBetweenLargestAndSmallestValueInThreeMovesTest {

    @Test
	public void testMinimumDifferenceBetweenLargestAndSmallestValueInThreeMoves() throws Exception {
        //Test 1
        int want = 0;
        int got = MinimumDifferenceBetweenLargestAndSmallestValueInThreeMoves.minDifference( new int[]{5,3,2,4} );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = MinimumDifferenceBetweenLargestAndSmallestValueInThreeMoves.minDifference( new int[]{1,5,0,10,14} );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = MinimumDifferenceBetweenLargestAndSmallestValueInThreeMoves.minDifference( new int[]{3,100,20} );
        assertEquals(want, got);
	}

}
