/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class StringCompressionTest {

    @Test
	public void testStringCompression() throws Exception {
        //Test 1
        int want = 6;
        int got = StringCompression.compress( new char[]{'a', 'a', 'b', 'b', 'c', 'c', 'c'} );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = StringCompression.compress( new char[]{'a'} );
        assertEquals(want, got);
        //Test 3
        want = 4;
        got = StringCompression.compress( new char[]{'a', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b'} );
        assertEquals(want, got);
	}

}
