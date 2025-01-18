/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class BitwiseXORofAllPairingsTest {

    @Test
	public void testBitwiseXORofAllPairings() throws Exception {
        //Test 1
        int want = 13;
        int got = BitwiseXORofAllPairings.xorAllNums( new int[]{2,1,3}, new int[]{10,2,5,0} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = BitwiseXORofAllPairings.xorAllNums( new int[]{1,2}, new int[]{3,4} );
        assertEquals(want, got);
	}

}
