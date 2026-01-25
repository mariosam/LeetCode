/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumPairRemovalToSortArrayITest {

    @Test
	public void testMinimumPairRemovalToSortArrayI() throws Exception {
        //Test 1
        int want = 2;
        int got =  MinimumPairRemovalToSortArrayI.minimumPairRemoval( new int[]{5,2,3,1} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got =  MinimumPairRemovalToSortArrayI.minimumPairRemoval( new int[]{1,2,2} );
        assertEquals(want, got);
	}

}
