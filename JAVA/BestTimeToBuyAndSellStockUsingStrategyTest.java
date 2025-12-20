/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class BestTimeToBuyAndSellStockUsingStrategyTest {

    @Test
	public void testBestTimeToBuyAndSellStockUsingStrategy() throws Exception {
        //Test 1
        long want = 10;
        long got = BestTimeToBuyAndSellStockUsingStrategy.maxProfit( new int[]{4,2,8}, new int[]{-1,0,1}, 2 );
        assertEquals(want, got);
        //Test 2
        want = 9;
        got = BestTimeToBuyAndSellStockUsingStrategy.maxProfit( new int[]{5,4,3}, new int[]{1,1,0},  2 );
        assertEquals(want, got);
	}

}
