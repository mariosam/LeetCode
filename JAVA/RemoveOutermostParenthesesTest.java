/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class RemoveOutermostParenthesesTest {

    @Test
	public void testRemoveOutermostParentheses() throws Exception {
        //Test 1
        String want = "()()()";
        String got = RemoveOutermostParentheses.removeOuterParentheses( "(()())(())" );
        assertEquals(want, got);
        //Test 2
        want = "()()()()(())";
        got = RemoveOutermostParentheses.removeOuterParentheses( "(()())(())(()(()))" );
        assertEquals(want, got);
        //Test 3
        want = "";
        got = RemoveOutermostParentheses.removeOuterParentheses( "()()" );
        assertEquals(want, got);
	}

}
