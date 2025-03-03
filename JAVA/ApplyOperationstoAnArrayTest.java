/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class ApplyOperationstoAnArrayTest {

    @Test
	public void testApplyOperationstoAnArray() throws Exception {
        //Test 1
        int[] want = new int[]{1,4,2,0,0,0};
        int[] got = ApplyOperationstoAnArray.applyOperations( new int[]{1,2,2,1,1,0} );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{1,0};
        got = ApplyOperationstoAnArray.applyOperations( new int[]{0,1} );
        assertArrayEquals(want, got);
	}

}
