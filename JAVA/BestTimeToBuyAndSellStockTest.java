/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class BestTimeToBuyAndSellStockTest {

    @Test
	public void testBestTimeToBuyAndSellStock() throws Exception {
        //Test 1
        int want = 8;
        int got = BestTimeToBuyAndSellStock.maxProfit( new int[]{1,3,2,8,4,9}, 2 );
        assertEquals(want, got);
        //Test 2
        want = 6;
        got = BestTimeToBuyAndSellStock.maxProfit( new int[]{1,3,7,5,10,3}, 3 );
        assertEquals(want, got);
	}

}
