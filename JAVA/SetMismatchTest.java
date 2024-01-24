/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class SetMismatchTest {

    @Test
	public void testSetMismatch() throws Exception {
        //Test 1
        int[] want = {2,3};
        int[] got = SetMismatch.findErrorNums( new int[]{1,2,2,4} );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{1,2};
        got = SetMismatch.findErrorNums( new int[]{1,1} );
        assertArrayEquals(want, got);
	}

}
