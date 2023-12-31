/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumOperationsToReduceXtoZeroTest {

    @Test
	public void testMinimumOperationsToReduceXtoZero() throws Exception {
        //Test 1
        int want = 2;
        int got =  MinimumOperationsToReduceXtoZero.minOperations( new int[]{1,1,4,2,3}, 5 );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got =  MinimumOperationsToReduceXtoZero.minOperations( new int[]{5,6,7,8,9}, 4 );
        assertEquals(want, got);
        //Test 3
        want = 5;
        got =  MinimumOperationsToReduceXtoZero.minOperations( new int[]{3,2,20,1,1,3}, 10 );
        assertEquals(want, got);
	}

}
