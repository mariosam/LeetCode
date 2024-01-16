/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class DetermineIfTwoStringsAreCloseTest {

    @Test
	public void testDetermineIfTwoStringsAreClose() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = DetermineIfTwoStringsAreClose.closeStrings( "abc", "bca" );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = DetermineIfTwoStringsAreClose.closeStrings( "a", "aa" );
        assertEquals(want, got);
        //Test 3
        want = true;
        got = DetermineIfTwoStringsAreClose.closeStrings( "cabbba", "abbccc" );
        assertEquals(want, got);
	}

}
