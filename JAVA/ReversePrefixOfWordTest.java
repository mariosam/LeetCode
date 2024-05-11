/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ReversePrefixOfWordTest {

    @Test
	public void testReversePrefixOfWord() throws Exception {
        //Test 1
        String want = "dcbaefd";
        String got = ReversePrefixOfWord.reversePrefix( "abcdefd", 'd' );
        assertEquals(want, got);
        //Test 2
        want = "zxyxxe";
        got = ReversePrefixOfWord.reversePrefix( "xyxzxe", 'z' );
        assertEquals(want, got);
        //Test 3
        want = "abcd";
        got = ReversePrefixOfWord.reversePrefix( "abcd", 'z' );
        assertEquals(want, got);
	}

}
