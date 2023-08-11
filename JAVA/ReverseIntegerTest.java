/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ReverseIntegerTest {

    @Test
	public void testReverseInteger() throws Exception {
        //Test 1
        int want = 321;
        int got = ReverseInteger.reverse( 123 );
        assertEquals(want, got);
        //Test 2
        want = -321;
        got = ReverseInteger.reverse( -123 );
        assertEquals(want, got);
        //Test 3
        want = 21;
        got = ReverseInteger.reverse( 120 );
        assertEquals(want, got);
	}

}
