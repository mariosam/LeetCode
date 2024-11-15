/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountTheNumberOfFairPairsTest {

    @Test
	public void testCountTheNumberOfFairPairs() throws Exception {
        //Test 1
        long want =  6;
        long got = CountTheNumberOfFairPairs.countFairPairs( new int[]{0,1,7,4,4,5}, 3, 6 );
        assertEquals(want, got);
        //Test 2
        want =  1;
        got = CountTheNumberOfFairPairs.countFairPairs( new int[]{1,7,9,2,5}, 11, 11 );
        assertEquals(want, got);
	}

}
