/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindTheDifferenceTest {

    @Test
	public void testFindTheDifference() throws Exception {
        //Test 1
        char want = 'e';
        char got = FindTheDifference.findTheDifference( "abcd", "abcde" );
        assertEquals(want, got);
        //Test 2
        want = 'y';
        got = FindTheDifference.findTheDifference( "", "y" );
        assertEquals(want, got);
	}

}
