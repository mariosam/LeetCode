/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class PowerOfTwoTest {

    @Test
	public void testPowerOfTwo() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = PowerOfTwo.isPowerOfTwo( 1 );
        assertEquals(want, got);
        //Test 2
        want = true;
        got = PowerOfTwo.isPowerOfTwo( 16 );
        assertEquals(want, got);
        //Test 3
        want = false;
        got = PowerOfTwo.isPowerOfTwo( 3 );
        assertEquals(want, got);
	}

}
