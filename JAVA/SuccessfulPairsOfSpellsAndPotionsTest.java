/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class SuccessfulPairsOfSpellsAndPotionsTest {

    @Test
	public void testSuccessfulPairsOfSpellsAndPotions() throws Exception {
        //Test 1
        int[] want = {4,0,3};
        int[] got = SuccessfulPairsOfSpellsAndPotions.successfulPairs( new int[]{5,1,3}, new int[]{1,2,3,4,5}, 7 );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{2,0,2};
        got = SuccessfulPairsOfSpellsAndPotions.successfulPairs( new int[]{3,1,2}, new int[]{8,5,8}, 16 );
        assertArrayEquals(want, got);
	}

}
