/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class KthSmallestAmountWithSingleDenominationCombinationTest {

    @Test
	public void testKthSmallestAmountWithSingleDenominationCombination() throws Exception {
        //Test 1
        long want = 9;
        long got = KthSmallestAmountWithSingleDenominationCombination.findKthSmallest( new int[]{3,6,9}, 3 );
        assertEquals(want, got);
        //Test 2
        want = 12;
        got = KthSmallestAmountWithSingleDenominationCombination.findKthSmallest( new int[]{5,2}, 7 );
        assertEquals(want, got);
	}

}
