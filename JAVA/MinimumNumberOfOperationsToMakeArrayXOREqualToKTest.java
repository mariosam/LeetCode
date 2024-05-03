/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumNumberOfOperationsToMakeArrayXOREqualToKTest {

    @Test
	public void testMinimumNumberOfOperationsToMakeArrayXOREqualToK() throws Exception {
        //Test 1
        int want = 2;
        int got =  MinimumNumberOfOperationsToMakeArrayXOREqualToK.minOperations( new int[]{2,1,3,4}, 1 );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got =  MinimumNumberOfOperationsToMakeArrayXOREqualToK.minOperations( new int[]{2,0,2,0}, 0 );
        assertEquals(want, got);
	}

}
