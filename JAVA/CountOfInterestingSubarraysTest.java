/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.Arrays;

import org.junit.Test;

public class CountOfInterestingSubarraysTest {

    @Test
	public void testCountOfInterestingSubarrays() throws Exception {
        //Test 1
        long want = 3;
        long got = CountOfInterestingSubarrays.countInterestingSubarrays( Arrays.asList(3,2,4), 2, 1 );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = CountOfInterestingSubarrays.countInterestingSubarrays( Arrays.asList(3,1,9,6), 3, 0 );
        assertEquals(want, got);
	}

}
