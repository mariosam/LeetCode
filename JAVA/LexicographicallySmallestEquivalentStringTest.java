/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LexicographicallySmallestEquivalentStringTest {

    @Test
	public void testLexicographicallySmallestEquivalentString() throws Exception {
        //Test 1
        String want = "makkek";
        String got = LexicographicallySmallestEquivalentString.smallestEquivalentString( "parker", "morris", "parser" );
        assertEquals(want, got);
        //Test 2
        want = "hdld";
        got = LexicographicallySmallestEquivalentString.smallestEquivalentString( "hello", "world", "hold" );
        assertEquals(want, got);
        //Test 3
        want = "aauaaaaada";
        got = LexicographicallySmallestEquivalentString.smallestEquivalentString( "leetcode", "programs", "sourcecode" );
        assertEquals(want, got);
	}

}
