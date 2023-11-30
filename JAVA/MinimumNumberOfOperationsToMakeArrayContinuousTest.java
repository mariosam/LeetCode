/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumNumberOfOperationsToMakeArrayContinuousTest {

    @Test
	public void testMinimumNumberOfOperationsToMakeArrayContinuous() throws Exception {
        //Test 1
        int want = 0;
        int got =  MinimumNumberOfOperationsToMakeArrayContinuous.minOperations( new int[]{4,2,5,3} );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got =  MinimumNumberOfOperationsToMakeArrayContinuous.minOperations( new int[]{1,2,3,5,6} );
        assertEquals(want, got);
        //Test 3
        want = 3;
        got =  MinimumNumberOfOperationsToMakeArrayContinuous.minOperations( new int[]{1,10,100,1000} );
        assertEquals(want, got);
	}

}
