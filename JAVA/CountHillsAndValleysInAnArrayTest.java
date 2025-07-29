/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountHillsAndValleysInAnArrayTest {

    @Test
	public void testCountHillsAndValleysInAnArray() throws Exception {
        //Test 1
        int want = 3;
        int got =  CountHillsAndValleysInAnArray.countHillValley( new int[]{2,4,1,1,6,5} );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got =  CountHillsAndValleysInAnArray.countHillValley( new int[]{6,6,5,5,4,1} );
        assertEquals(want, got);
	}

}
