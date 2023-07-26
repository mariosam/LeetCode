/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindSmallestLetterGreaterThanTargetTest {

    @Test
	public void testFindSmallestLetterGreaterThanTarget() throws Exception {
        //Test 1
        char want = 'c';
        char got = FindSmallestLetterGreaterThanTarget.nextGreatestLetter( new char[]{'c', 'f', 'j'}, 'a' );
        assertEquals(want, got);
        //Test 2
        want = 'f';
        got = FindSmallestLetterGreaterThanTarget.nextGreatestLetter( new char[]{'c', 'f', 'j'}, 'c' );
        assertEquals(want, got);
        //Test 3
        want = 'x';
        got = FindSmallestLetterGreaterThanTarget.nextGreatestLetter( new char[]{'x', 'x', 'y', 'y'}, 'z' );
        assertEquals(want, got);
	}

}
