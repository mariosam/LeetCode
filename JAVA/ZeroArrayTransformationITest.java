/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ZeroArrayTransformationITest {

    @Test
	public void testZeroArrayTransformationI() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = ZeroArrayTransformationI.isZeroArray( new int[]{1,0,1}, new int[][]{{0,2}} );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = ZeroArrayTransformationI.isZeroArray( new int[]{4,3,2,1}, new int[][]{{1,3},{0,2}} );
        assertEquals(want, got);
	}

}
