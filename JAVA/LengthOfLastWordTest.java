/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class LengthOfLastWordTest {

    @Test
	public void testLengthOfLastWord() throws Exception {
        //Test 1
        int want = 5;
        int got = LengthOfLastWord.lengthOfLastWord( "Hello World" );
        assertEquals(want, got);
        //Test 2
        want = 4;
        got = LengthOfLastWord.lengthOfLastWord( "   fly me   to   the moon  " );
        assertEquals(want, got);
        //Test 3
        want = 6;
        got = LengthOfLastWord.lengthOfLastWord( "luffy is still joyboy" );
        assertEquals(want, got);
        //Test 4
        want = 1;
        got = LengthOfLastWord.lengthOfLastWord( "a" );
        assertEquals(want, got);
	}

}
