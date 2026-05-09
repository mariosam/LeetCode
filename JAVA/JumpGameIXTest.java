/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class JumpGameIXTest {

    @Test
	public void testJumpGameIV() throws Exception {
        //Test 1
        int[] want = {2,2,3};
        int[] got = JumpGameIX.maxValue( new int[]{2,1,3} );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{3,3,3};
        got = JumpGameIX.maxValue( new int[]{2,3,1} );
        assertArrayEquals(want, got);
	}

}
