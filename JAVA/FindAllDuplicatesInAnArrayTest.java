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

public class FindAllDuplicatesInAnArrayTest {

    @Test
	public void testFindAllDuplicatesInAnArray() throws Exception {
        //Test 1
        List<Integer> want = new ArrayList<Integer>();
        want.add(3);
        want.add(2);
        List<Integer> got = FindAllDuplicatesInAnArray.findDuplicates( new int[]{4,3,2,7,8,2,3,1} );
        assertArrayEquals(want.toArray(), got.toArray());
        //Test 2
        want = new ArrayList<Integer>();
        want.add(1);
        got = FindAllDuplicatesInAnArray.findDuplicates( new int[]{1,1,2} );
        assertArrayEquals(want.toArray(), got.toArray());
        //Test 3
        want = new ArrayList<Integer>();
        got = FindAllDuplicatesInAnArray.findDuplicates( new int[]{1} );
        assertArrayEquals(want.toArray(), got.toArray());
	}

}
