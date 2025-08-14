/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class WaysToExpressAnIntegerAsSumOfPowersTest {

    @Test
	public void testWaysToExpressAnIntegerAsSumOfPowers() throws Exception {
        //Test 1
        int want = 1;
        int got = WaysToExpressAnIntegerAsSumOfPowers.numberOfWays( 10, 2 );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = WaysToExpressAnIntegerAsSumOfPowers.numberOfWays( 4, 1 );
        assertEquals(want, got);
	}

}
