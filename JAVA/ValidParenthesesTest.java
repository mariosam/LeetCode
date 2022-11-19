package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ValidParenthesesTest {

    @Test
	public void testIsValid() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = ValidParentheses.isValid( "()" );
        assertEquals(want, got);
        //Test 2
        want = true;
        got = ValidParentheses.isValid( "()[]{}" );
        assertEquals(want, got);
        //Test 3
        want = false;
        got = ValidParentheses.isValid("(]");
        assertEquals(want, got);
        //Test 4
        want = false;
        got = ValidParentheses.isValid("([)]");
        assertEquals(want, got);
        //Test 5
        want = true;
        got = ValidParentheses.isValid("{[]}");
        assertEquals(want, got);
        //Test 6
        want = false;
        got = ValidParentheses.isValid("()))");
        assertEquals(want, got);
        //Test 7
        want = false;
        got = ValidParentheses.isValid("]");
        assertEquals(want, got);
	}
}
