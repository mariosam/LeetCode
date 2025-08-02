/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class BitwiseORsOfSubarraysTest {

    @Test
	public void testBitwiseORsOfSubarrays() throws Exception {
        //Test 1
        int want = 1;
        int got = BitwiseORsOfSubarrays.subarrayBitwiseORs( new int[]{0} );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = BitwiseORsOfSubarrays.subarrayBitwiseORs( new int[]{1,1,2} );
        assertEquals(want, got);
        //Test 3
        want = 6;
        got = BitwiseORsOfSubarrays.subarrayBitwiseORs( new int[]{1,2,4} );
        assertEquals(want, got);
	}

}
