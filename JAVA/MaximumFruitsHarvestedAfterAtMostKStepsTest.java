/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumFruitsHarvestedAfterAtMostKStepsTest {

    @Test
	public void testMaximumFruitsHarvestedAfterAtMostKSteps() throws Exception {
        //Test 1
        int want = 9;
        int got = MaximumFruitsHarvestedAfterAtMostKSteps.maxTotalFruits( new int[][]{{2,8},{6,3},{8,6}}, 5, 4 );
        assertEquals(want, got);
        //Test 2
        want = 14;
        got = MaximumFruitsHarvestedAfterAtMostKSteps.maxTotalFruits( new int[][]{{0,9},{4,1},{5,7},{6,2},{7,4},{10,9}}, 5, 4 );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = MaximumFruitsHarvestedAfterAtMostKSteps.maxTotalFruits( new int[][]{{0,3},{6,4},{8,5}}, 3, 2 );
        assertEquals(want, got);
	}

}
