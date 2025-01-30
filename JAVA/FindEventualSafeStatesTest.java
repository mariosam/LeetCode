/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class FindEventualSafeStatesTest {

    @Test
	public void testFindEventualSafeStates() throws Exception {
        //Test 1
        List<Integer> want = List.of(2,4,5,6);
        List<Integer> got = FindEventualSafeStates.eventualSafeNodes( new int[][]{{1,2},{2,3},{5},{0},{5},{},{}} );
        assertEquals(new ArrayList<>(want), got);
        //assertEquals(want, got);
        //Test 2
        want = List.of(4);
        got = FindEventualSafeStates.eventualSafeNodes( new int[][]{{1,2,3,4},{1,2},{3,4},{0,4},{}} );
        assertEquals(new ArrayList<>(want), got);
       // assertEquals(want, got);
	}

}
