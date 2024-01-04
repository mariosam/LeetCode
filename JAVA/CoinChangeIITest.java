/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CoinChangeIITest {

    @Test
	public void testCoinChangeII() throws Exception {
        //Test 1
        int want = 4;
        int got =  CoinChangeII.change( 5, new int[]{1,2,5} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got =  CoinChangeII.change( 3, new int[]{2} );
        assertEquals(want, got);
        //Test 3
        want = 1;
        got =  CoinChangeII.change( 10, new int[]{10} );
        assertEquals(want, got);
	}

}
