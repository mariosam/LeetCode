/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;

import org.junit.Test;

public class FindMissingObservationsTest {

    @Test
	public void testFindMissingObservations() throws Exception {
        //Test 1
        int[] want = new int[]{6,6};
        int[] got = FindMissingObservations.missingRolls( new int[]{3,2,4,3}, 4, 2 );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{3,2,2,2};
        got = FindMissingObservations.missingRolls( new int[]{1,5,6}, 3, 4 );
        assertArrayEquals(want, got);
        //Test 3
        want = new int[]{};
        got = FindMissingObservations.missingRolls( new int[]{1,2,3,4}, 6, 4 );
        assertArrayEquals(want, got);
	}

}
