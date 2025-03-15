/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ZeroArrayTransformationIITest {

    @Test
	public void testZeroArrayTransformationII() throws Exception {
        //Test 1
        int want = 2;
        int got = ZeroArrayTransformationII.minZeroArray( new int[]{2,0,2}, new int[][]{{0,2,1},{0,2,1},{1,1,3}} );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got = ZeroArrayTransformationII.minZeroArray( new int[]{4,3,2,1}, new int[][]{{1,3,2},{0,2,1}} );
        assertEquals(want, got);
	}

}
