/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountCommasInRangeIITest {

    @Test
	public void testCountCommasInRangeII() throws Exception {
        //Test 1
        long want = 3;
        long got =  CountCommasInRangeII.countCommas( 1002 );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got =  CountCommasInRangeII.countCommas( 998 );
        assertEquals(want, got);
	}

}
