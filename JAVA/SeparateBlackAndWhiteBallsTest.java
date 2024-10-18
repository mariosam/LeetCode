/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class SeparateBlackAndWhiteBallsTest {

    @Test
	public void testSeparateBlackAndWhiteBalls() throws Exception {
        //Test 1
        long want = 1;
        long got = SeparateBlackAndWhiteBalls.minimumSteps( "101" );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = SeparateBlackAndWhiteBalls.minimumSteps( "100" );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = SeparateBlackAndWhiteBalls.minimumSteps( "0111" );
        assertEquals(want, got);
	}

}
