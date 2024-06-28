/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumNumberOfKConsecutiveBitFlipsTest {

    @Test
	public void testMinimumNumberOfKConsecutiveBitFlips() throws Exception {
        //Test 1
        int want = 2;
        int got =  MinimumNumberOfKConsecutiveBitFlips.minKBitFlips( new int[]{0,1,0}, 1 );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got =  MinimumNumberOfKConsecutiveBitFlips.minKBitFlips( new int[]{1,1,0}, 2 );
        assertEquals(want, got);
        //Test 3
        want = 3;
        got =  MinimumNumberOfKConsecutiveBitFlips.minKBitFlips( new int[]{0,0,0,1,0,1,1,0}, 3 );
        assertEquals(want, got);
	}

}
