/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumPenaltyForShopTest {

    @Test
	public void testMinimumPenaltyForShop() throws Exception {
        //Test 1
        int want = 2;
        int got = MinimumPenaltyForShop.bestClosingTime( "YYNY" );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = MinimumPenaltyForShop.bestClosingTime( "NNNNN" );
        assertEquals(want, got);
        //Test 3
        want = 4;
        got = MinimumPenaltyForShop.bestClosingTime( "YYYY" );
        assertEquals(want, got);
	}

}
