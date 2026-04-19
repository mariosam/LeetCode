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

public class ClosestEqualElementQueriesTest {

    @Test
	public void testClosestEqualElementQueries() throws Exception {
        //Test 1
        List<Integer> want = Arrays.asList(2, -1, 3);
        List<Integer> got = ClosestEqualElementQueries.solveQueries(new int[]{1, 3, 1, 4, 1, 3, 2}, new int[]{0, 3, 5});
        assertEquals(want, got);
        //Test 2
        want = Arrays.asList(-1, -1, -1, -1);
        got = ClosestEqualElementQueries.solveQueries(new int[]{1, 2, 3, 4}, new int[]{0, 1, 2, 3});
        assertEquals(want, got);
	}

}
