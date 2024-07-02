/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ReverseStringTest {

    @Test
	public void testReverseString() throws Exception {
        //Test 1
        char[] want = new char[]{'o','l','l','e','h'};
        Object[] got = ReverseString.reverseString( new char[]{'h','e','l','l','o'} );
        assertEquals(want, got);
        //Test 2
        want = new char[]{'h','a','n','n','a','H'};
        got = ReverseString.reverseString( new char[]{'H','a','n','n','a','h'} );
        assertEquals(want, got);
	}

}
