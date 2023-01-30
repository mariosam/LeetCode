/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumIceCreamBarsTest {

    @Test
	public void testMaximumIceCreamBars() throws Exception {
        //Test 1
        int want = 4;
        int got = MaximumIceCreamBars.maxIceCream( new int[]{1,6,3,1,2,5}, 7 );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = MaximumIceCreamBars.maxIceCream( new int[]{10,6,8,7,7,8}, 5 );
        assertEquals(want, got);
        //Test 3
        want = 6;
        got = MaximumIceCreamBars.maxIceCream( new int[]{1,6,3,1,2,5}, 20 );
        assertEquals(want, got);
        //Test 4
        want = 9;
        got = MaximumIceCreamBars.maxIceCream( new int[]{7,3,3,6,6,6,10,5,9,2}, 56 );
        assertEquals(want, got);
        //Test 5
        want = 4;
        got = MaximumIceCreamBars.maxIceCream( new int[]{10,2,10,10,10,10,8,2,7,8}, 25 );
        assertEquals(want, got);
	}

}
