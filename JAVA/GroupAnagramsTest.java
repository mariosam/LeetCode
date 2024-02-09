/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import static org.junit.Assert.assertEquals;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

import org.junit.Test;

public class GroupAnagramsTest {

    @Test
	public void testGroupAnagrams() throws Exception {
        //Test 1
        List<List<String>> want = new ArrayList<List<String>>();
        want.add(Arrays.asList("ate", "eat", "tea"));
        want.add(Arrays.asList("nat", "tan"));
        want.add(Arrays.asList("bat"));
        List<List<String>> got = GroupAnagrams.groupAnagrams( new String[]{"eat","tea","tan","ate","nat","bat"} );
        assertArrayEquals(want.toArray(), got.toArray());
        //Test 2
        want = new ArrayList<List<String>>();
        want.add(Arrays.asList(""));
        got = GroupAnagrams.groupAnagrams( new String[]{""} );
        assertEquals(want, got);
        //Test 3
        want = new ArrayList<List<String>>();
        want.add(Arrays.asList("a"));
        got = GroupAnagrams.groupAnagrams( new String[]{"a"} );
        assertEquals(want, got);
	}

}
