/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountTheHiddenSequencesTest {

    @Test
	public void testCountTheHiddenSequences() throws Exception {
        //Test 1
        long want =  2;
        long got = CountTheHiddenSequences.numberOfArrays( new int[]{1,-3,4}, 1, 6 );
        assertEquals(want, got);
        //Test 2
        want =  4;
        got = CountTheHiddenSequences.numberOfArrays( new int[]{3,-4,5,1,-2}, -4, 5 );
        assertEquals(want, got);
        //Test 3
        want =  0;
        got = CountTheHiddenSequences.numberOfArrays( new int[]{4,-7,2}, 3, 6 );
        assertEquals(want, got);
	}

}
