/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class HeightCheckerTest {

    @Test
	public void testHeightChecker() throws Exception {
        //Test 1
        int want = 3;
        int got = HeightChecker.heightChecker( new int[]{1,1,4,2,1,3} );
        assertEquals(want, got);
        //Test 2
        want = 5;
        got = HeightChecker.heightChecker( new int[]{5,1,2,3,4} );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = HeightChecker.heightChecker( new int[]{1,2,3,4,5} );
        assertEquals(want, got);
	}

}
