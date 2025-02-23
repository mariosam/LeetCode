/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class RemoveAllOccurrencesOfaSubstringTest {

    @Test
	public void testRemoveAllOccurrencesOfaSubstring() throws Exception {
        //Test 1
        String want = "dab";
        String got = RemoveAllOccurrencesOfaSubstring.removeOccurrences( "daabcbaabcbc", "abc" );
        assertEquals(want, got);
        //Test 2
        want = "ab";
        got = RemoveAllOccurrencesOfaSubstring.removeOccurrences( "axxxxyyyyb", "xy" );
        assertEquals(want, got);
	}

}
