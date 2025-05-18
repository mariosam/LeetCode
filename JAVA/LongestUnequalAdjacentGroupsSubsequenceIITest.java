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

public class LongestUnequalAdjacentGroupsSubsequenceIITest {

    @Test
	public void testLongestUnequalAdjacentGroupsSubsequenceII() throws Exception {
        //Test 1
        List<String> want = new ArrayList<String>();
        want.add("bab");
        want.add("cab");
        List<String> got = LongestUnequalAdjacentGroupsSubsequenceII.getWordsInLongestSubsequence( new String[]{"bab","dab","cab"}, new int[]{1,2,2} );
        assertArrayEquals(want.toArray(), got.toArray());
        //Test 2
        want = new ArrayList<String>();
        want.add("a");
        want.add("b");
        want.add("c");
        want.add("d");
        got = LongestUnequalAdjacentGroupsSubsequenceII.getWordsInLongestSubsequence( new String[]{"a","b","c","d"}, new int[]{1,2,3,4} );
        assertArrayEquals(want.toArray(), got.toArray());
	}

}
