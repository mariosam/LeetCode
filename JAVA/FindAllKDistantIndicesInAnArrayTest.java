/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class FindAllKDistantIndicesInAnArrayTest {

    @Test
	public void testFindAllKDistantIndicesInAnArray() throws Exception {
        //Test 1
        List<Integer> want = new ArrayList<Integer>();
        want.add(1);
        want.add(2);
        want.add(3);
        want.add(4);
        want.add(5);
        want.add(6);
        List<Integer> got = FindAllKDistantIndicesInAnArray.findKDistantIndices( new int[]{3,4,9,1,3,9,5}, 9, 1 );
        assertArrayEquals(want.toArray(), got.toArray());
        //Test 2
        want = new ArrayList<Integer>();
        want.add(0);
        want.add(1);
        want.add(2);
        want.add(3);
        want.add(4);
        got = FindAllKDistantIndicesInAnArray.findKDistantIndices( new int[]{2,2,2,2,2}, 2, 2 );
        assertArrayEquals(want.toArray(), got.toArray());
	}

}
