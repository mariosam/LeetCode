/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumOperationsToExceedThresholdValueIITest {

    @Test
	public void testMinimumOperationsToExceedThresholdValueII() throws Exception {
        //Test 1
        int want = 2;
        int got =  MinimumOperationsToExceedThresholdValueII.minOperations( new int[]{2,11,10,1,3}, 10 );
        assertEquals(want, got);
        //Test 2
        want = 4;
        got =  MinimumOperationsToExceedThresholdValueII.minOperations( new int[]{1,1,2,4,9}, 20 );
        assertEquals(want, got);
	}

}
