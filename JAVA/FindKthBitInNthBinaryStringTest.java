/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindKthBitInNthBinaryStringTest {

    @Test
	public void testFindKthBitInNthBinaryString() throws Exception {
        //Test 1
        char want = '0';
        char got = FindKthBitInNthBinaryString.findKthBit( 3, 1 );
        assertEquals(want, got);
        //Test 2
        want = '1';
        got = FindKthBitInNthBinaryString.findKthBit( 4, 11 );
        assertEquals(want, got);
	}

}
