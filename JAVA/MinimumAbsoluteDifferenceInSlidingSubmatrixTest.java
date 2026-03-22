/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertTrue;

import java.util.Arrays;

import org.junit.Test;

public class MinimumAbsoluteDifferenceInSlidingSubmatrixTest {

    @Test
	public void testMinimumAbsoluteDifferenceInSlidingSubmatrix() throws Exception {
        // Test 1
        int[][] want = {{2}};
        int[][] got = MinimumAbsoluteDifferenceInSlidingSubmatrix.minAbsDiff(
            new int[][]{{1,8},{3,-2}}, 2
        );
        assertTrue(Arrays.deepEquals(want, got));

        // Test 2
        want = new int[][]{{0,0}};
        got = MinimumAbsoluteDifferenceInSlidingSubmatrix.minAbsDiff(
            new int[][]{{3,-1}}, 1
        );
        assertTrue(Arrays.deepEquals(want, got));

        // Test 3
        want = new int[][]{{1,2}};
        got = MinimumAbsoluteDifferenceInSlidingSubmatrix.minAbsDiff(
            new int[][]{{1,-2,3},{2,3,5}}, 2
        );
        assertTrue(Arrays.deepEquals(want, got));
	}

}
