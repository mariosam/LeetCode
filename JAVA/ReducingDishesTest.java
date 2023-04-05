/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ReducingDishesTest {

    @Test
	public void testReducingDishes() throws Exception {
        //Test 1
        int want = 14;
        int got = ReducingDishes.maxSatisfaction( new int[]{-1,-8,0,5,-9} );
        assertEquals(want, got);
        //Test 2
        want = 20;
        got = ReducingDishes.maxSatisfaction( new int[]{4,3,2} );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = ReducingDishes.maxSatisfaction( new int[]{-1,-4,-5} );
        assertEquals(want, got);
	}

}
