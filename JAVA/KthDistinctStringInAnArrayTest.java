/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class KthDistinctStringInAnArrayTest {

    @Test
	public void testKthDistinctStringInAnArray() throws Exception {
        //Test 1
        String want = "a";
        String got = KthDistinctStringInAnArray.kthDistinct( new String[]{"d","b","c","b","c","a"}, 2 );
        assertEquals(want, got);
        //Test 2
        want = "aaa";
        got = KthDistinctStringInAnArray.kthDistinct( new String[]{"aaa","aa","a"}, 1 );
        assertEquals(want, got);
        //Test 3
        want = "";
        got = KthDistinctStringInAnArray.kthDistinct( new String[]{"a","b","a"}, 3 );
        assertEquals(want, got);
	}

}
