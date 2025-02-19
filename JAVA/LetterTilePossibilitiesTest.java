/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LetterTilePossibilitiesTest {

    @Test
	public void testLetterTilePossibilities() throws Exception {
        //Test 1
        int want = 8;
        int got = LetterTilePossibilities.numTilePossibilities( "AAB" );
        assertEquals(want, got);
        //Test 2
        want = 188;
        got = LetterTilePossibilities.numTilePossibilities( "AAABBC" );
        assertEquals(want, got);
        //Test 3
        want = 1;
        got = LetterTilePossibilities.numTilePossibilities( "V" );
        assertEquals(want, got);
	}

}
