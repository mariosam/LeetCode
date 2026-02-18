/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ReverseBitsTest {

    @Test
	public void testReverseBits() throws Exception {
        //Test 1
        int want = 964176192;
        int got = ReverseBits.reverseBits( 43261596 );
        assertEquals(want, got);
        //Test 2
        want = 1073741822;
        got = ReverseBits.reverseBits( 2147483644 );
        assertEquals(want, got);
	}

}
