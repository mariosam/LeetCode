/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import org.junit.Test;

public class FindTargetIndicesAfterSortingArrayTest {

    @Test
	public void testFindTargetIndicesAfterSortingArray() throws Exception {
        //Test 1
        List<Integer> want = Arrays.asList(1, 2);
        List<Integer> got = FindTargetIndicesAfterSortingArray.targetIndices( new int[]{1,2,5,2,3}, 2 );
        assertEquals(want, got);
        //Test 2
        want = Arrays.asList(3);
        got = FindTargetIndicesAfterSortingArray.targetIndices( new int[]{1,2,5,2,3}, 3 );
        assertEquals(want, got);
        //Test 3
        want = Arrays.asList(4);
        got = FindTargetIndicesAfterSortingArray.targetIndices( new int[]{1,2,5,2,3}, 5 );
        assertEquals(want, got);
	}

}
