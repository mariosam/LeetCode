/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumCostOfBuyingCandiesWithDiscountTest {

    @Test
	public void testMinimumCostOfBuyingCandiesWithDiscount() throws Exception {
        //Test 1
        int want = 5;
        int got =  MinimumCostOfBuyingCandiesWithDiscount.minimumCost( new int[]{1,2,3} );
        assertEquals(want, got);
        //Test 2
        want = 23;
        got =  MinimumCostOfBuyingCandiesWithDiscount.minimumCost( new int[]{6,5,7,9,2,2});
        assertEquals(want, got);
        //Test 3
        want = 10;
        got =  MinimumCostOfBuyingCandiesWithDiscount.minimumCost( new int[]{5,5});
        assertEquals(want, got);
	}

}
