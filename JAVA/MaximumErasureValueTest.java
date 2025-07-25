/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumErasureValueTest {

    @Test
	public void testMaximumErasureValue() throws Exception {
        //Test 1
        int want = 17;
        int got = MaximumErasureValue.maximumUniqueSubarray( new int[]{4,2,4,5,6} );
        assertEquals(want, got);
        //Test 2
        want = 8;
        got = MaximumErasureValue.maximumUniqueSubarray( new int[]{5,2,1,2,5,2,1,2,5} );
        assertEquals(want, got);
	}

}
