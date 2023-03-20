/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindTheIndexOfTheFirstOccurrenceInStringTest {

    @Test
	public void testFindTheIndexOfTheFirstOccurrenceInString() throws Exception {
        //Test 1
        int want = 0;
        int got = FindTheIndexOfTheFirstOccurrenceInString.strStr( "sadbutsad", "sad" );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got = FindTheIndexOfTheFirstOccurrenceInString.strStr( "leetcode", "leeto" );
        assertEquals(want, got);
	}

}
