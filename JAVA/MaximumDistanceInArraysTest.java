/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

import org.junit.Test;

public class MaximumDistanceInArraysTest {

    @Test
	public void testMaximumDistanceInArrays() throws Exception {
        //Test 1
        int want = 4;
        List<List<Integer>> arrays = new ArrayList<>();
        arrays.add(Arrays.asList(1, 2, 3));
        arrays.add(Arrays.asList(4, 5));
        arrays.add(Arrays.asList(1, 2, 3));
        int got = MaximumDistanceInArrays.maxDistance( arrays );
        assertEquals(want, got);
        //Test 2
        want = 0;
        arrays = new ArrayList<>();
        arrays.add(Arrays.asList(1));
        arrays.add(Arrays.asList(1));
        got = MaximumDistanceInArrays.maxDistance( arrays );
        assertEquals(want, got);
	}

}
