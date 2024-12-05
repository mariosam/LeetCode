/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class AddingSpacesToStringTest {

    @Test
	public void testAddingSpacesToString() throws Exception {
        //Test 1
        String want = "Leetcode Helps Me Learn";
        String got = AddingSpacesToString.addSpaces( "LeetcodeHelpsMeLearn", new int[]{8,13,15} );
        assertEquals(want, got);
        //Test 2
        want = "i code in py thon";
        got = AddingSpacesToString.addSpaces( "icodeinpython", new int[]{1,5,7,9} );
        assertEquals(want, got);
        //Test 3
        want = " s p a c i n g";
        got = AddingSpacesToString.addSpaces( "spacing", new int[]{0,1,2,3,4,5,6} );
        assertEquals(want, got);
	}

}
