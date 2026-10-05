/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import static org.junit.Assert.assertEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class GenerateParenthesesTest {

    @Test
	public void testGenerateParentheses() throws Exception {
        //Test 1
        List<String> want = new ArrayList<String>();
        want.add("((()))");
        want.add("(()())");
        want.add("(())()");
        want.add("()(())");
        want.add("()()()");
        List<String> got = GenerateParentheses.generateParenthesis( 3 );
        assertArrayEquals(want.toArray(), got.toArray());
        //Test 2
        want = new ArrayList<String>();
        want.add("()");
        got = GenerateParentheses.generateParenthesis( 1 );
        assertEquals(want, got);
	}

}
