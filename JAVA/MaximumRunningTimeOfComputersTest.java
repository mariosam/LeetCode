/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumRunningTimeOfComputersTest {

    @Test
	public void testMaximumRunningTimeOfComputers() throws Exception {
        //Test 1
        long want = 4;
        long got = MaximumRunningTimeOfComputers.maxRunTime( 2, new int[]{3,3,3} );
        assertEquals(want, got, 0);
        //Test 2
        want = 2;
        got = MaximumRunningTimeOfComputers.maxRunTime( 2, new int[]{1,1,1,1} );
        assertEquals(want, got, 0);
	}

}
