/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class Maximum69NumberTest {

    @Test
	public void testMaximum69Number() throws Exception {
        //Test 1
        int want = 9969;
        int got = Maximum69Number.maximum69Number( 9669 );
        assertEquals(want, got);
        //Test 2
        want = 9999;
        got = Maximum69Number.maximum69Number( 9996 );
        assertEquals(want, got);
        //Test 3
        want = 9999;
        got = Maximum69Number.maximum69Number( 9999 );
        assertEquals(want, got);
	}

}
