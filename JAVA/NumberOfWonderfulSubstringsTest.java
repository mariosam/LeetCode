/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberOfWonderfulSubstringsTest {

    @Test
	public void testNumberOfWonderfulSubstrings() throws Exception {
        //Test 1
        long want = 4;
        long got = NumberOfWonderfulSubstrings.wonderfulSubstrings( "aba" );
        assertEquals(want, got);
        //Test 2
        want = 9;
        got = NumberOfWonderfulSubstrings.wonderfulSubstrings( "aabb" );
        assertEquals(want, got);
        //Test 3
        want = 2;
        got = NumberOfWonderfulSubstrings.wonderfulSubstrings( "he" );
        assertEquals(want, got);
	}

}
