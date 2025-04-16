/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountGoodTripletsTest {

    @Test
	public void testCountGoodTriplets() throws Exception {
        //Test 1
        int want = 4;
        int got =  CountGoodTriplets.countGoodTriplets( new int[]{3,0,1,1,9,7},7, 2, 3 );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got =  CountGoodTriplets.countGoodTriplets( new int[]{1,1,2,2,3},0, 0, 1 );
        assertEquals(want, got);
	}

}
