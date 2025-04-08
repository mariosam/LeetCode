/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.Arrays;
import java.util.List;

import org.junit.Test;

public class LargestDivisibleSubsetTest {

    @Test
	public void testLargestDivisibleSubset() throws Exception {
        //Test 1
        List<Integer> want = Arrays.asList(2,1);
        List<Integer> got = LargestDivisibleSubset.largestDivisibleSubset( new int[]{1,2,3} );
        assertEquals(want, got);
        //Test 2
        want = Arrays.asList(8,4,2,1);
        got = LargestDivisibleSubset.largestDivisibleSubset( new int[]{1,2,4,8} );
        assertEquals(want, got);
	}

}
