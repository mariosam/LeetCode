/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberOfLaserBeamsInBankTest {

    @Test
	public void testNumberOfLaserBeamsInBank() throws Exception {
        //Test 1
        int want = 8;
        int got = NumberOfLaserBeamsInBank.numberOfBeams( new String[]{"011001","000000","010100","001000"} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = NumberOfLaserBeamsInBank.numberOfBeams( new String[]{"000","111","000"} );
        assertEquals(want, got);
	}

}
