/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountTheNumberOfComputerUnlockingPermutationsTest {

    @Test
	public void testCountTheNumberOfComputerUnlockingPermutations() throws Exception {
        //Test 1
        long want =  2;
        long got = CountTheNumberOfComputerUnlockingPermutations.countPermutations( new int[]{1,2,3} );
        assertEquals(want, got);
        //Test 2
        want =  0;
        got = CountTheNumberOfComputerUnlockingPermutations.countPermutations( new int[]{3,3,3,4,4,4} );
        assertEquals(want, got);
	}

}
