/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumScoreWordsFormedByLettersTest {

    @Test
	public void testMaximumScoreWordsFormedByLetters() throws Exception {
        //Test 1
        int want = 23;
        int got = MaximumScoreWordsFormedByLetters.maxScoreWords( new String[]{"dog","cat","dad","good"}, new char[]{'a','a','c','d','d','d','g','o','o'}, new int[]{1,0,9,5,0,0,3,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0} );
        assertEquals(want, got);
        //Test 2
        want = 27;
        got = MaximumScoreWordsFormedByLetters.maxScoreWords( new String[]{"xxxz","ax","bx","cx"}, new char[]{'z','a','b','c','x','x','x'}, new int[]{4,4,4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,0,10} );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = MaximumScoreWordsFormedByLetters.maxScoreWords( new String[]{"leetcode"}, new char[]{'l','e','t','c','o','d'}, new int[]{0,0,1,1,1,0,0,0,0,0,0,1,0,0,1,0,0,0,0,1,0,0,0,0,0,0} );
        assertEquals(want, got);
	}

}
