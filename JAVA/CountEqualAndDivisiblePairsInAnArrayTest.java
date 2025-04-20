/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountEqualAndDivisiblePairsInAnArrayTest {

    @Test
	public void testCountEqualAndDivisiblePairsInAnArray() throws Exception {
        //Test 1
        int want = 4;
        int got =  CountEqualAndDivisiblePairsInAnArray.countPairs( new int[]{3,1,2,2,2,1,3},2 );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got =  CountEqualAndDivisiblePairsInAnArray.countPairs( new int[]{1,2,3,4}, 1 );
        assertEquals(want, got);
	}

}
