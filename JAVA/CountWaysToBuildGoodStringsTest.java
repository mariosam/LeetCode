/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountWaysToBuildGoodStringsTest {

    @Test
	public void testCountWaysToBuildGoodStrings() throws Exception {
        //Test 1
        int want =  8;
        int got = CountWaysToBuildGoodStrings.countGoodStrings( 3, 3, 1, 1 );
        assertEquals(want, got);
        //Test 2
        want =  5;
        got = CountWaysToBuildGoodStrings.countGoodStrings( 2, 3, 1, 2 );
        assertEquals(want, got);
	}

}
