/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumOneBitOperationsToMakeIntegersZeroTest {

    @Test
	public void testMinimumOneBitOperationsToMakeIntegersZero() throws Exception {
        //Test 1
        int want = 2;
        int got =  MinimumOneBitOperationsToMakeIntegersZero.minimumOneBitOperations( 3 );
        assertEquals(want, got);
        //Test 2
        want = 4;
        got =  MinimumOneBitOperationsToMakeIntegersZero.minimumOneBitOperations( 6 );
        assertEquals(want, got);
	}

}
