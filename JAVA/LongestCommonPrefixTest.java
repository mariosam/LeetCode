/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LongestCommonPrefixTest {

    @Test
	public void testLongestCommonPrefix() throws Exception {
        //Test 1
        String want = "fl";
        String got = LongestCommonPrefix.longestCommonPrefix( new String[]{"flower","flow","flight"} );
        assertEquals(want, got);
        //Test 2
        want = "";
        got = LongestCommonPrefix.longestCommonPrefix( new String[]{"dog","racecar","car"} );
        assertEquals(want, got);
        //Test 3
        want = "a";
        got = LongestCommonPrefix.longestCommonPrefix( new String[]{"a"} );
        assertEquals(want, got);
	}

}
